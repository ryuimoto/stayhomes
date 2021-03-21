"use strict";

let WebSocketServer = require('ws').Server;
let port = 9000;
let wsServer = new WebSocketServer({ port: port });
console.log('websocket server start. port =' + port);


wsServer.op('connection',function(ws){
    console.log('-- websocket connected --');
    ws.on('message', function(message){
        wsServer.clients.forEach(function each(client){
            if(isSame(ws,client)){
                console.log('- skip sender -');
            }
            else{
                client.send(message);
            }
        });
    });
});

function isSame(ws1,ws2){
    return (ws1 === ws2);
}