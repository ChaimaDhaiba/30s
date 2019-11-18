<?php
set_time_limit(0);

define('BR', "\n");
define('SERVER_LOOP_SLEEP', 5000000);

abstract class ServerBase
{
    protected static $clients = array(); # Liste des clients connectes
    protected static $protocol; # Protocol du serveur
    protected static $socket; # Socket d'ecoute de connection du serveur
    protected static $address; # Adresse IP du serveur (127.0.0.1 par defaut)
    protected static $port; # Port d'ecoute du serveur
    protected static $timeout = 1000; # Timeout de la socket serveur
    protected static $umax = 10; # Nombre maximum d'utilisateurs connectes

    protected function  __construct($address, $port, $protocol)
    {
        if ($protocol != SOL_TCP && $protocol != SOL_UDP)
            throw new Exception(__CLASS__.'::'.__FUNCTION__.'::INVALID_PROTOCOL');

        self::$address = $address;
        self::$port = $port;
        self::$protocol = $protocol;
    }

    /*
     * Demarage du serveur
     */
    protected function start()
    {
        if
        (
            !is_resource(self::$socket) &&
            !is_resource(self::$socket = socket_create(AF_INET, SOCK_STREAM, self::$protocol))
        )
            throw new Exception(__CLASS__.'::'.__FUNCTION__.'::UNABLE_TO_CREATE_SOCKET');

        socket_set_option(self::$socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => self::$timeout, 'usec' => 0));

        if (!socket_bind(self::$socket, self::$address, self::$port))
        {
            $this->shutdown();
            throw new Exception(__CLASS__.'::'.__FUNCTION__.'::BIND_ERROR::'.socket_strerror(socket_last_error()));
        }

        if (!socket_listen(self::$socket, self::$umax))
        {
            $this->shutdown();
            throw new Exception(__CLASS__.'::'.__FUNCTION__.'::LISTEN_ERROR::'.socket_strerror(socket_last_error()));
        }

        socket_set_nonblock(self::$socket);
        
        ob_start();
    }

    /*
     * Ecriture sur la socket serveur
     */
    protected function write($socket, $datas)
    {
        return socket_write($socket, $datas, strlen($datas));
    }
    
    /*
     * Lecture sur la socket serveur
     */
    protected function read($socket, $size = 1024)
    {
        return socket_read($socket, $size);
    }

    /*
     * Instruction live, teste si le client recoit bien le message
     */
    protected function live($socket)
    {
        return $this->write($socket, '@live');
    }
     /*
     * Fermeture de la socket serveur
     */
    protected function shutdown()
    {
        if (is_resource(self::$socket))
            socket_shutdown(self::$socket, 2);

        ob_end_clean();
    }
    /*
     * A implementer dans la classe serveur
     */
    abstract protected function loop();
    abstract protected function listen();
}

class Server extends ServerBase
{
    private $startAt;
    private $continue = true;
    
    public function  __construct($address = '127.0.0.1', $port = 4242, $protocol = SOL_TCP)
    {
        parent::__construct($address, $port, $protocol);
    }
    
    /*
     * Demarrage du serveur
     */
    public function  start()
    {
        parent::start();
        
        $this->welcome();
        $this->startAt = time();
        $this->loop();
    }

    /*
     * Au demarage...
     */
    private function welcome()
    {
        echo 'Start '.__CLASS__.' server '.self::$address.' on port '.self::$port.BR;
        echo 'Waiting for incoming connections...'.BR;
    }
    
    /*
     * Boucle infinie du serveur, attente des connections
     */
    public function loop()
    {
        if(($client = socket_accept(self::$socket)) !== false)
        {
            echo 'New client '.$client.' has connected'.BR;
            self::$clients[] = $client;
        }
        
        $this->listen();

        ob_flush();
        usleep(SERVER_LOOP_SLEEP);
        
        if ($this->continue)
            $this->loop();
    }
    /*
     * Ecoute des messages de chaque client
     */
    protected function listen()
    {
        foreach (self::$clients as $idx => $client)
        {
            if (is_resource($client))
            {
                if ($this->live($client) === false)
                {
                    echo 'Client '.$client.' timeout'.BR;
                    echo socket_strerror(socket_last_error()).BR;

                    unset(self::$clients[$idx]);
                }
                else
                {
                    if (($datas = $this->read($client)))
                    {
                        echo 'Incoming datas from '.$client.' : '.$datas.BR;

                        if ($this->write($client, '@msg:Bonjour '.$client.' !'))
                        {
                            echo 'Sending response to '.$client.'...'.BR;
                        }
                        else
                        {
                             echo 'Fail to send response to '.$client.BR;
                        }
                    }
                }
            }
        }
        
        echo sizeof(self::$clients).' connected'.BR;
    }
    /*
     * Fremeture de la socket serveur
     */
    public function shutdown()
    {
        $this->continue = false;
        
        parent::shutdown();

        echo 'Shutdow server. Uptime : '.round(time() - $this->startAt).' s'.BR;
    }
}

/*
 * Lancement du serveur
 */
try
{
    $serv = new Server();
    
    $serv->start();
}
catch(Exception $e)
{
    echo $e->getMessage().BR;
}

?>
