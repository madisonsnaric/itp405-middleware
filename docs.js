let connection = new WebSocket('ws://localhost:8080'); 

connection.onopen = () => {
	console.log('connected from the frontend'); 
}; 

connection.onerror = () => {
	console.log('failed to connect from the frontend'); 
}; 

connection.onmessage = () => {
	console.log('received message'); 
}; 


