
var mas = Array();
var even = 1;

function createMas(quantity, first){
	mas.push(first);
	for (var i = 1; i < quantity; i++){
		if (even = 1){
			mas.push(i*2+3);
			even = 0;
		}
		if (even = 0){
			mas.push(i*3+2);
			even = 1;
		}
	}
}

createMas(10, 22);

for (var i = 0; i < mas.length; i++){
	document.write(mas[i] + " ");
}

document.write("<br />");

var a = 1;
var b = -4;
var c = 4;

var D = b*b - 4*a*c;

var a1 = (-b + Math.sqrt(D))/2*a;
var a2 = (-b - Math.sqrt(D))/2*a;

document.write(a1+ "  " + a2);