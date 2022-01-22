function validateForm() {
 var name = document.forms["Sun_and_Moon_cafe_Form"]["name"].value;
 var email = document.forms["Sun_and_Moon_cafe_Form"]["email"].value;
 var birthday = document.forms["Sun_and_Moon_cafe_Form"]["birthday"].value
if (name == "") {
 alert("Name must be filled out");
 return false; 
}
if (email == "") {
 alert("Email must be filled out");
 return false; 
}
if (birthday == "") {
 alert("Birthday must be filled out");
 return false; 
}
}