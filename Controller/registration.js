function validregistration(){
  var fname=document.getElementById("fname").value;
  var lname=document.getElementById("lname").value;
  var email=document.getElementById("email").value;
  var pass=document.getElementById("pass").value;
  var uname=document.getElementById("username").value;

  if(fname ==""){
    alert("Enter Your First Name");
    return false;
  }
  if(lname == ""){
    alert("Enter Last Name");
    return false;
  }
  if(email == ""){
    alert("Enter Your E-mail");
    return false;
  }
  if(pass == ""){
    alert("Give Password");
    return false;
  }
  if(username == ""){
    alert("Give  UserName");
    return false;
  }
  

  }