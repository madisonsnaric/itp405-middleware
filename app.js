let WebSocket = require('ws'); 

let wss = new WebSocket.Server({ port: 8080 }); 

wss.on('connection', (ws) => {
	ws.on('message', () => {
		console.log('')
	}); 
}); 