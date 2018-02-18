 var person = {
 	name: 'Max',
 	age: = 27,
 };  

 var anotherPerson = new Object();
 anotherPerson.name = 'Anna';
 anotherPerson.age = 30;


var anotherPerson = Object.crete(person);//prototip. ovaj objekt nasledjuje prethodni.
anotherPerson.name = 'Anna';

console.log(anotherPerson.age); //ime je novo, ali godine nasledjuje.

Object.prototype 

console.log(person.prototype);

 var person = {
 	name: 'Max',
 	age: = 27,
 }; 
Object.prototype.greet = function() {
	console.log('Hello, I am ' + this.name);//ispisace i max i anna. odnosi se na objekt na kome se poyiva greet funkcija.
	//to su ovde obe
} //pristupa lancu protitipa. svaki objekt ima prototip svojstvo.
person.greet();

 var person = {
 	name: 'Max',
 	age: = 27,
 }; 
 var max = Object.create(person);
 var anna = Object.create(person);
 anna.name='Anna'; //person je prototip.
 console.log(max.name);//preuzima polje iz prototipa. object.create radi sa prototipovima
Object.getPrototypeOf(anna)