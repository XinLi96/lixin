var BASE_DIR = __dirname;
var fs = require('fs');

fs.rename(BASE_DIR + '/1.txt',BASE_DIR + '/2.txt',function(err){
	if(err){
		throw err;
	}else{
		console.log('success');
	}
})