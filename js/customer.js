$(document).ready(function () {
  //customer Name
  $("#customernamecheck").hide();
  let customernameerror = true;
  $("#customername").keyup(function () {
    customername();
  });
  function customername() {
    let customernameValue = $("#customername").val();
    if (customernameValue == "") {
      $("#customernamecheck").show();
      customernameerror = false;
      return false;
    } else {
      $("#customernamecheck").hide();
      customernameerror = true;
    }
  }

  //gender
  $("#gendercheck").hide();
  let gendererror = true;
  $("#gender").keyup(function () {
    gender();
  });
  function gender() {
    let genderValue = $("#gender").val();
    if (genderValue == "") {
      $("#gendercheck").show();
      gendererror = false;
      return false;
    } else {
      $("#gendercheck").hide();
      gendererror = true;
    }
  }

  //dateofbirth
  $("#dateofbirthcheck").hide();
  let dateofbirtherror = true;
  $("#dateofbirth").keyup(function () {
    dateofbirth();
  });
  function dateofbirth() {
    let dateofbirthValue = $("#dateofbirth").val();
    if (dateofbirthValue == "") {
      $("#dateofbirthcheck").show();
      dateofbirtherror = false;
      return false;
    } else {
      $("#dateofbirthcheck").hide();
      dateofbirtherror = true;
    }
  }


  //age
  $("#agecheck").hide();
  let ageerror = true;
  $("#age").keyup(function () {
    age();
  });
  function age() {
    let ageValue = $("#age").val();
    if (ageValue == "") {
      $("#agecheck").show();
      ageerror = false;
      return false;
    } else {
      $("#agecheck").hide();
      ageerror = true;
    }
  }




   //mobilenumber
   $("#mobilenumbercheck").hide();
   let mobilenumbererror = true;
   $("#mobilenumber").keyup(function () {
     mobilenumber();
   });
   function mobilenumber() {
     let mobilenumberValue = $("#mobilenumber").val();
     if (mobilenumberValue == "") {
       $("#mobilenumbercheck").show();
       mobilenumbererror = false;
       return false;
     } else {
       $("#mobilenumbercheck").hide();
       mobilenumbererror = true;
     }
   }


     //whatsappnumber
     $("#whatsappnumbercheck").hide();
     let whatsappnumbererror = true;
     $("#whatsappnumber").keyup(function () {
       whatsappnumber();
     });
     function whatsappnumber() {
       let whatsappnumberValue = $("#whatsappnumber").val();
       if (whatsappnumberValue == "") {
         $("#whatsappnumbercheck").show();
         whatsappnumbererror = false;
         return false;
       } else {
         $("#whatsappnumbercheck").hide();
         whatsappnumbererror = true;
       }
     }



        //anniverserydate
        $("#anniverserydatecheck").hide();
        let anniverserydateerror = true;
        $("#anniverserydate").keyup(function () {
          anniverserydate();
        });
        function anniverserydate() {
          let anniverserydateValue = $("#anniverserydate").val();
          if (anniverserydateValue == "") {
            $("#anniverserydatecheck").show();
            anniverserydateerror = false;
            return false;
          } else {
            $("#anniverserydatecheck").hide();
            anniverserydateerror = true;
          }
        }


        

        //needmembership
        $("#needmembershipcheck").hide();
        let needmembershiperror = true;
        $("#needmembership").keyup(function () {
          needmembership();
        });
        function needmembership() {
          let needmembershipValue = $("#needmembership").val();
          if (needmembershipValue == "") {
            $("#needmembershipcheck").show();
            needmembershiperror = false;
            return false;
          } else {
            $("#needmembershipcheck").hide();
            needmembershiperror = true;
          }
        }


        
        //customerimage
        $("#customerimagecheck").hide();
        let customerimageerror = true;
        $("#customerimage").keyup(function () {
          customerimage();
        });
        function customerimage() {
          let customerimageValue = $("#customerimage").val();
          if (customerimageValue == "") {
            $("#customerimagecheck").show();
            customerimageerror = false;
            return false;
          } else {
            $("#customerimagecheck").hide();
            customerimageerror = true;
          }
        }




         //typeofcustomer
         $("#typeofcustomercheck").hide();
         let typeofcustomererror = true;
         $("#typeofcustomer").keyup(function () {
           typeofcustomer();
         });
         function typeofcustomer() {
           let typeofcustomerValue = $("#typeofcustomer").val();
           if (typeofcustomerValue == "") {
             $("#typeofcustomercheck").show();
             typeofcustomererror = false;
             return false;
           } else {
             $("#typeofcustomercheck").hide();
             typeofcustomererror = true;
           }
         }



           //noofvisit
           $("#noofvisitcheck").hide();
           let noofvisiterror = true;
           $("#noofvisit").keyup(function () {
             noofvisit();
           });
           function noofvisit() {
             let noofvisitValue = $("#noofvisit").val();
             if (noofvisitValue == "") {
               $("#noofvisitcheck").show();
               noofvisiterror = false;
               return false;
             } else {
               $("#noofvisitcheck").hide();
               noofvisiterror = true;
             }
           }


           


           //frequencyofvisit
           $("#frequencyofvisitcheck").hide();
           let frequencyofvisiterror = true;
           $("#frequencyofvisit").keyup(function () {
             frequencyofvisit();
           });
           function frequencyofvisit() {
             let frequencyofvisitValue = $("#frequencyofvisit").val();
             if (frequencyofvisitValue == "") {
               $("#frequencyofvisitcheck").show();
               frequencyofvisiterror = false;
               return false;
             } else {
               $("#frequencyofvisitcheck").hide();
               frequencyofvisiterror = true;
             }
           }
  // Validate email
  $("#emailidcheck").hide();
  let emailiderror = true;
  $("#emailid").keyup(function () {
    validateemail();
  });
  function validateemail() {
    var $email = $('form input[name="emailid'); //change form to id or containment selector
    var re =
      /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if ($email.val() == "" || !re.test($email.val())) {
      $("#emailcheck").show();
      emailiderror = false;
      return false;
    } else {
      $("#emailcheck").hide();
      emailiderror = true;
    }
  }



  $('#submititembtn').click(function () {	
	
    customername();
    gender();
    dateofbirth();
    age();
    mobilenumber();
    anniverserydate();
    whatsappnumber();
    needmembership();
    customerimage();
    typeofcustomer();
    noofvisit();
    validateemail();
    frequencyofvisit();
    if (customernameerror == true 
        && gendererror == true 
        && dateofbirtherror == true 
        && ageerror == true 
        && mobilenumbererror == true
        && whatsappnumbererror == true
        && anniverserydateerror == true
        && needmembershiperror == true
        && customerimageerror == true
        && typeofcustomererror == true
        && noofvisiterror == true
        && frequencyofvisiterror == true
        && emailiderror == true
        )
      {
        return true;
      } 
      else 
      {
        return false;
      }
});




$("#employeedownload").click(function () {
    window.location.href='uploads/downloadfiles/employeebulksample.xlsx'
    });

});


function EmployeeBulkupload(){
    var modal = document.getElementById("EmpBulkUploadModal");
    var btn = document.getElementById("employeeupload");
    var span = document.getElementsByClassName("bulkclose")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    }