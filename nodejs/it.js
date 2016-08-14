var util = require('util');
var person = require('./people.js');

function it(){
	person.call(this);
	util.inherits(person,this);
	this.code = function(){
		console.log('coding...');
	}
}
module.exports = it;