function validation(){

    if(document.Formfill.User_name.value==""){
        document.getElementById("result").innerHTML="Enter Username*";
        
        return false;
    }
    
    else if(document.Formfill.User_name.value.length<6){
        document.getElementById("result").innerHTML="At least 6 letters*";
        return false;

    }
    
    else if(document.Formfill.Email.value==""){
        document.getElementById("result").innerHTML="Enter your Email*";
        return false;
    }
    
    else if(document.Formfill.Password.value==""){
        document.getElementById("result").innerHTML="Enter your Password*";
        return false;
    }
    
    else if(document.Formfill.Password.value.length<6){
        document.getElementById("result").innerHTML="password must be at least 6 digits*";
        return false;
    }
    else if(document.Formfill.cpassword.value==""){
        document.getElementById("result").innerHTML="enter confirm password*";
        return false;
    }
    
    else if(document.Formfill.Password.value !== document.Formfill.cpassword.value){
        document.getElementById("result").innerHTML="Password does not match*";
        return false;
    }
    
  
        return true;
    }
    
