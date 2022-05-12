
//BMI calculator javascript function for the homepage
function Calculate(){
    var height = document.getElementById("h-input").value;
    var weight = document.getElementById("w-input").value;

    var result = parseFloat(weight) /(parseFloat(height)/100)**2;

    if(!isNaN(result)){
        document.getElementById("bmi-output").innerHTML = result;
        if(result < 18.5){
            document.getElementById("bmi-status").innerHTML = "Underweight";
        }
        else if(result < 25){
            document.getElementById("bmi-status").innerHTML = "Healthy";
        }
        else if(result < 30){
            document.getElementById("bmi-status").innerHTML = "Overweight";
        }
        else{
            document.getElementById("bmi-status").innerHTML = "Obesity";
        }
    }
}

//Calorie calculator Javascript function for the homepage
function CalculateCal(){
    var height = document.getElementById("he-input").value;
    var weight = document.getElementById("we-input").value;
  
    var result = parseFloat(weight) * 15;

    if(!isNaN(result)){
    document.getElementById("Cal-output").innerHTML = result;
    }
}