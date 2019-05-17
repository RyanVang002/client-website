function validateForm() {
  var x = document.forms["myForm"]["Fname"].value;
  var y = document.forms["myForm"]["Lname"].value;
  var z = document.forms["myForm"]["Email"].value;
  var a = document.forms["myForm"]["Message"].value;
    document.forms["myForm"]["Fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
     if (y == "") {
    alert("Name must be filled out");
    return false;
  }
     if (z == "") {
    alert("Name must be filled out");
    return false;
  }
     if (a == "") {
    alert("Name must be filled out");
    return false;
  }
}