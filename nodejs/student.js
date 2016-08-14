var util = require('util');
var people = require('./people.js');

function student(){
	people.call(this);
	util.inherits(people,this);
	this.study = function(){
		console.log('studying...');
	};
}
module.exports = student;