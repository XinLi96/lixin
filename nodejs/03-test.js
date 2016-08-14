var dns = require('dns');

var address = dns.resolve4('www.qq.com',function(err,addresses){
	if(err){
		console.log(err);
	}else{
		console.log(addresses);
	}
});
console.log(address + 'laoshan');