var http = require('http');
var dns = require('dns');
var fs = require('fs');
var url = require('url');
var querystring = require('querystring');

http.createServer(function(req,res){
	res.writeHead('200',{'content-type':'text/html'});
	// console.log(__dirname);
	var readPath = __dirname + '/' + '1.html';
	var indexPages = fs.readFileSync(readPath);
	res.end(indexPages);
}).listen(3000);	

console.log('server is listening port 3000');