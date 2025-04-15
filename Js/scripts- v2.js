// Data Types
// Boolean: True or False
// String: Any typical sentence
// Number: Numeric, Decimal Points
// Undefined: Does not exist or is not set
// Null: Non-existent

// var means that the variable has a global scope by default
// let means that the variable exists and can be changed only inside of its function
// const means that the varible can not be changed

// declare means to add a value to a variable or set it empty or null
 // to concatenate means to put together, and the symbol is a plus sign +

// var yourName = "Simone Brown";

//const yourName;


/*
function sayMyName () {
    //some function
    let yourName = "Simone Brown"
    yourName = "Simone W. Brown";
    console.log("My name is " + yourName)
}
sayMyName();
*/

document.getElementById("myBTN").addEventListener("click", sayMyName);

function sayMyName () {
    //some function
    let yourName = document.getElementById("myName").value;

    document.getElementById("myNameDiv") .innerHTML = yourName;
    
}
