var person = {
  name: 'Adriana',
  age: 27,
  details: {
  hobbies: ['sports','cooking'],
  location: 'Serbia'
            },
  greet: function () {
  console.log('Hello, I am ' + this.age + ' years old');
  }
};
person.greet();
//---------------------------

function fn() {
console.log(this);
}
var obj = {
	fn: fn
};
obj.fn.bind(this)
//this se odnosi na ono sa leve strane tacke. sa bind se veze za funkciju

function fn() {
console.log(this);
}
var obj = {
	obfn: fn
};
var person = {
	name: 'Max'
}
obj.fn.bind(person)(); //na ovaj nacin se this odnosi na person