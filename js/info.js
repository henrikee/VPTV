var date = new Date();
//getting and displaying current date on page
document.getElementById("date").innerHTML = "Tänään on "+date.getDate()+'.'+(date.getMonth()+1)+'.'+date.getFullYear();

//functions for buttons, all are the same
function func0(){
    //find the exact element
    var x = document.getElementById("p0");
    //check if element is displayed
    if (x.style.display === "none") {
    //change display to block if needed
    x.style.display = "block";
    }else{
    x.style.display = "none";
    }
}
function func1(){
    var x = document.getElementById("p1");
    if (x.style.display === "none") {
    x.style.display = "block";
    }else{
    x.style.display = "none";
    }
}
function func2(){
    var x = document.getElementById("p2");
    if (x.style.display === "none") {
    x.style.display = "block";
    }else{
    x.style.display = "none";
    }
}
function func3(){
    var x = document.getElementById("p3");
    if (x.style.display === "none") {
    x.style.display = "block";
    }else{
    x.style.display = "none";
    }
}
function func4(){
    var x = document.getElementById("p4");
    if (x.style.display === "none") {
    x.style.display = "block";
    }else{
    x.style.display = "none";
    }
}
function func5(){
    var x = document.getElementById("p5");
    if (x.style.display === "none") {
    x.style.display = "block";
    }else{
    x.style.display = "none";
    }
}
function func6(){
    var x = document.getElementById("p6");
    if (x.style.display === "none") {
    x.style.display = "block";
    }else{
    x.style.display = "none";
    }
}
