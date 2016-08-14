function Person(){
	this.think = function(callback){
		console.log('think~~~');
		setTimeout(function(){
			callback();
		},5000);
	}

	this.answer = function(){
		console.log('answer others question');
	}
}
var person = new Person();
person.think(function(){
	console.log('think 5 second to a question');
});
person.answer();