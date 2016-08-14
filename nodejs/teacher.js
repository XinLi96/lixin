var util = require('util');
var person = require('./people.js');

function teacher(){
	person.call(this);
	util.inherits(person,this);
	this.tech = function(){
		console.log('teching...');
	}
}
module.exports = teacher;