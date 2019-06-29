 $(document).ready(function () {

     $(window).load(function()
     { 
         $(".loading-page .sk-cube-grid").fadeOut(4000,
         function(){
             $(".loading-page").fadeOut(2000);
         });
     });
 
 });
 function validateform(){  
    var x=document.form["signupform"]["usernameBox"]["passwordBox"].value;   
      
    if (x==null || x==""||x=='undefined'||x.length<=3){  
      alert("Name can't be blank");  
      return false;  
    }else if(password.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    }  
 