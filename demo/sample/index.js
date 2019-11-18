var express = require('express');
var socket  = require('socket.io');
var application =express{};
var server =application.listen(5000,function(){
    console.log('Your Server is runing');
});