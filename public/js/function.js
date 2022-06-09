function helloworld(message, message2) {
    alert(var3 + ":" +message +message2)
    var3 = 'kitten'
    alert(var3 + ":" +message +message2)
}

var a = 33;
var b = 10;
var c = "Test";
var linebreak = "<br />";
document.write("a + b = ");
result = a + b;
document.write(result);
document.write(linebreak);

document.write("a - b = ");
result = a - b;
document.write(result);
document.write(linebreak);

document.write("a / b = ");
result = a / b;
document.write(result);
document.write(linebreak);

document.write("a % b = ");
result = a % b;
document.write(result);
document.write(linebreak);

document.write("a + b + c = ");
result = a + b + c;
document.write(result);
document.write(linebreak);

a = a++;
document.write("a++ = ");
result = a++;
document.write(result);
document.write(linebreak);

b = b--;
document.write("b-- = ");
result = b--;
document.write(result);
document.write(linebreak);

var age = 20; //prompt("What is your age?")
if (age >= 17) {
    document.write('<b>Qualifies for driving</b><br>');
} else {
    document.write('<b>Does Not Qualifies for driving</b><br>');
}

var book = "eco"; //prompt("What kind of book that you looking for?");
if( book == "history" || book == "sejarah" ){
document.write("<b>History Book</b>" + linebreak);
}else if( book == "maths" || book == "math" ){
document.write("<b>Maths Book</b>" + linebreak);
}else if( book == "economics" || book == "eco"){
document.write("<b>Economics Book</b>" + linebreak);
}else{
document.write("<b>Unknown Book</b>" +linebreak);
}

var grade = 'D'; //prompt("What is your grade?");
document.write('Entering switch blocks...<br>');
    switch (grade) {
        case 'A': document.write('Good Job <br>');
                break;
        case 'B': document.write('Pretty good <br>');
                break;
        case 'C': document.write('Passed<br>');
                break;
        case 'D': document.write('Not so good<br>');
                break;
        case 'F': document.write('Failed<br>');
                break;
        default: document.write('Unknown grade <br>');
    }
document.write('Exiting switch blocks...<br>');

//For Loop
var count = prompt('Enter number to count');
document.write('Starting Loop...<br>');
for (count = prompt('Enter number to count'); count <= 10; count++) {
    document.write('Current Count :' + count + linebreak );
}
document.write('Loop stopped'+linebreak);

//While Loop
document.write('Starting Loop...<br>');
while (count <= 10) {
    document.write('Current Count :' + count + linebreak );
    count++;
}
document.write('Loop stopped'+linebreak);

//For Loop and If-Else statement
var x = 1
document.write('Starting Loop...<br>');
while (x <= 20) {
    if (x == 5) {
        break;
    }

    x = x + 1;
    document.write('Current Count :' + x + linebreak );
}
document.write('Loop stopped'+linebreak);

var x = 1
document.write('Starting Loop...<br>');
while (x <= 20) {
    if (x == 5) {
        break;
    }

    x = x + 1;
    document.write('Current Count :' + x + linebreak );
}
document.write('Loop stopped'+linebreak);
