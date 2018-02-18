function Person () {
this.name = 'Adriana';
} //konstruktor!!! 

Person.prototype.greet = function() {
	console.log('Hello');
};
var person = new Person();
person.name = "Adriana"; // isto je objekt. object.prototype
console.log (person.__proto__ == Person.prototype);//person.prototype je js napravio automatski
person.greet();

//this se odnosi na "sebe", u ovom slucaju, na Person
//cini polje vidljivo van objekta
//konstruktor predstavlja osnovu, ona isto ima prototip.
//na nju se stavljaju neke difoltne vrednosti
//prototipu se pristupa ako u objektu ne postoji neko polje. 

function Person (name, age) {
	this.name = name;
	this.age = age;
}
var person = new Person ("Adriana", 27);
console.log (person);

// ---------------------
 var person = {
 	name: "Max",
 	age: 27 }
 	// ==--------------------

 var person = new Object ();
 person.name = "Max";
 person.age = 27;
 //------------------------------
 var person = Object.create (null);//ovde moze da se bira prototip
 person.name = "Max";
 person.age = 27;
 //-----------------------
 function Person() {
 	this.name = "Max";
 	this.age = 27;
 }
 var person = new Person();
 // nacini pravljenja objekta