 $(document).ready(function () {

     $(window).load(function()
     { 
         $(".loading-page .sk-cube-grid").fadeOut(4000,
         function(){
             $(".loading-page").fadeOut(2000);
         });
     });
 
 });

 var form = document.getElementById('validateform');
 var allFormInput = form.elements; 
 allFormInput[0].addEventListener("input",validateform)
 function validateform(){
  if(this.value == "" || this.value.indexOf("<") !== -1 || this.value.indexOf(">") !== -1 ||typeof(this.value) == null || typeof(this.value) == 'undefined'  || this.value.length <= 5 || this.value.length >= 20){
    document.getElementById('error').innerHTML = '<h1>Error Username </h1>';
    return false;
    }
    else if(this.value.search(/\s/g) > -1)
    {
      document.getElementById('error').innerHTML = '<h1>Error whitespace </h1>';
    return false;
    }
    else {
    document.getElementById('error').innerHTML = '<h1 style=\"color:green\;\">Correct Username </h1>';
    }
    };
  
   
    var y=document.form["passwordBox"]["cpasswordBox"].value;   
    allFormInput[1].addEventListener("input",matchpass)
    function matchpass(){  
    // if (y==null || y==""||y=='undefined'||y.length<=3){  
    //   alert("password can't be blank");  
    //   return false;  
    // }else if(password.length<6){  
    //   alert("Password must be at least 6 characters long.");  
    //   return false;  
    //   } 
     
      if(passwordBox==cpasswordBox){  
        return true;  
        }  
        else{  
        alert("password must be same!");  
        return false;  
        }    
    };
 