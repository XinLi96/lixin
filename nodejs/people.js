function people(){
	this.sleep = function(){
		console.log('sleeping....');
	};
	this.eat = function(){
		console.log('eating...');
	}
}
module.exports = people;