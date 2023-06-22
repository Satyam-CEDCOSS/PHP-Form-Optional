function action() {
  var x = document.getElementById("age").value;
  var y = document.getElementById("weight").value;
  console.log(y);
  if (x <= 20 && x >= 5) {
    if (x <= 7 && x >= 5) {
      if (y === "" || y < 0) {
        document.getElementById("message").innerHTML =
          " Please Enter Valid Weight";
      } else if (y > 20) {
        document.getElementById("message").innerHTML = "OverWeight";
      } else if (y < 15) {
        document.getElementById("message").innerHTML = "UnderWeight";
      } else {
        document.getElementById("message").style.color = "green";
        document.getElementById("message").innerHTML = "You Are fit";
      }
    } else if (x <= 10 && x >= 8) {
      if (y === "" || y < 0) {
        document.getElementById("message").innerHTML =
          " Please Enter Valid Weight";
      } else if (y > 25) {
        document.getElementById("message").innerHTML = "OverWeight";
      } else if (y < 21) {
        document.getElementById("message").innerHTML = "UnderWeight";
      } else {
        document.getElementById("message").style.color = "green";
        document.getElementById("fit").innerHTML = "You Are fit";
      }
    } else if (x <= 15 && x >= 11) {
      if (y === "" || y < 0) {
        document.getElementById("message").innerHTML =
          " Please Enter Valid Weight";
      } else if (y > 30) {
        document.getElementById("message").innerHTML = "OverWeight";
      } else if (y < 26) {
        document.getElementById("message").innerHTML = "UnderWeight";
      } else {
        document.getElementById("message").style.color = "green";
        document.getElementById("message").innerHTML = "You Are fit";
      }
    } else if (x <= 20 && x >= 16) {
      if (y === "" || y < 0) {
        document.getElementById("message").innerHTML =
          " Please Enter Valid Weight";
      } else if (y > 40) {
        document.getElementById("message").innerHTML = "OverWeight";
      } else if (y < 31) {
        document.getElementById("message").innerHTML = "UnderWeight";
      } else {
        document.getElementById("message").style.color = "green";
        document.getElementById("message").innerHTML = "You Are fit";
      }
    } else {
      document.getElementById("message").innerHTML =
        "Please Enter Age and Weight in (+)ve Integer";
    }
  } else {
    document.getElementById("message").innerHTML =
      "Please Enter Age in range of 5 to 25";
  }
}