	// my first javascript code
	// ------------------------

/*
*
*   	HELLO FRIEND	
*
*/

let element = document.getElementById('first_id');
console.log(element);

let age = 17;

const birthDay = 2003;

console.log(age);

console.log(birthDay -  age);

console.log(birthDay, age, "HELLO FRIEND");

age = "hi";

console.log(typeof(age));
// or
age = 0x003445;
console.log(typeof age);
console.log(age);

age = 17;

//string tamplate
let a = `He is say ${age} years.\n`;

console.log(a);

let car = {
	color: "red",
	maxSpeed: 359,
	audio: {
		brand: "Sony",
		powerW: 1000
	}
};

car.maxSpeed = 250;
car.color = "green";

car["color"] = "red";

console.log(typeof car.color);
console.log(typeof car.maxSpeed);
console.log(typeof car);
console.log(car);
console.log(car.audio.brand);
console.log(car.audio);

if(car.color == "red") {
	console.log("The car is a red\n");
}
else {
	console.log("Car not is a red\n");
}

car.color == "red" ? console.log("red\n") : console.log("not red\n");

let color = car.color == "red" ? "color is red" : "color is not red";

console.log(color);

console.log(car.color);

car.color = "pink";

console.log(car.color);

colorDefault();

console.log(car.color);

//	1:23:33









function colorDefault() {
	car.color = "white";
	console.log(car.color);
}
