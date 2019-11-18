Client / serveur : les sockets------------------------------
Url     : http://codes-sources.commentcamarche.net/source/53099-client-serveur-les-socketsAuteur  : MorphinofDate    : 03/08/2013
Licence :
=========

Ce document intitulé « Client / serveur : les sockets » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

Il y peu de sources utilisant les sockets ici, aussi voila un exemple de client 
/ serveur en PhP afin d'illustrer l'utilisation des sockets.
<br />
<br />Le s
erveur et le client sont d&eacute;compos&eacute;s en deux classe chacun : la cla
sse de base impl&eacute;mentant les m&eacute;canismes d'ouverture des sockets, l
a lecture et l'&eacute;criture sur celles ci et tous les m&eacute;canismes de ba
se, puis la classe qui va g&eacute;rer la partie loop et le timeout.
<br />
<b
r />Ici le client et le serveur sont tr&egrave;s simplistes et s'&eacute;changen
t b&ecirc;tement des messages sans s'arr&ecirc;ter mais le fonctionnement est la
.
<br />
<br />Pour tester cette source je vous conseille fortement d'utiliser
 Cygwin :)
