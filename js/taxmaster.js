$(document).ready(function () {
  // Validate Stocktype
  $("#financialyearcheck").hide();
  let financialyearerror = true;
  $("#financialyear").keyup(function () {
    financialyear();
  });

  function financialyear() {
    let financialyearValue = $("#financialyear").val();
    if (financialyearValue.length == "") {
      $("#financialyearcheck").show();
      financialyearerror = false;
      return false;
    } else {
      $("#financialyearcheck").hide();
      financialyearerror = true;
    }
  }

  //classification
  $("#classificationcheck").hide();
  let classificationerror = true;
  $("#classification").keyup(function () {
    classification();
  });

  function classification() {
    let classificationValue = $("#classification").val();
    if (classificationValue.length == "") {
      $("#classificationcheck").show();
      classificationerror = false;
      return false;
    } else {
      $("#classificationcheck").hide();
      classificationerror = true;
    }
  }

  //description
  $("#descriptioncheck").hide();
  let descriptionerror = true;
  $("#description").keyup(function () {
    description();
  });

  function description() {
    let descriptionValue = $("#description").val();
    if ((descriptionValue.length = "")) {
      $("#descriptioncheck").show();
      descriptionerror = false;
      return false;
    } else {
      $("#descriptioncheck").hide();
      descriptionerror = true;
    }
  }

  //tax
  $("#taxcheck").hide();
  let taxerror = true;
  $("#tax").keyup(function () {
    tax();
  });

  function tax() {
    let taxValue = $("#tax").val();
    if ((taxValue.length = "")) {
      $("#taxcheck").show();
      taxerror = false;
      return false;
    } else {
      $("#taxcheck").hide();
      taxerror = true;
    }
  }

  //cess
  $("#cesscheck").hide();
  let cesserror = true;
  $("#cess").keyup(function () {
    cess();
  });

  function cess() {
    let cessValue = $("#cess").val();
    if ((cessValue.length = "")) {
      $("#cesscheck").show();
      cesserror = false;
      return false;
    } else {
      $("#cesscheck").hide();
      cesserror = true;
    }
  }

  //addl
  $("#addlcheck").hide();
  let addlerror = true;
  $("#addl").keyup(function () {
    addl();
  });

  function addl() {
    let addlValue = $("#addl").val();
    if ((addlValue.length = "")) {
      $("#addlcheck").show();
      addlerror = false;
      return false;
    } else {
      $("#addlcheck").hide();
      addlerror = true;
    }
  }

  $("#submittax").click(function () {
    financialyear();
    addl();
    tax();
    cess();
    classification();
    description();
    if (
      addlerror == true &&
      cesserror == true &&
      taxerror == true &&
      classificationerror == true &&
      descriptionerror == true &&
      financialyearerror == true
    ) {
      return true;
    } else {
      return false;
    }
  });




//Tax Calculation

  function Total() {
    var tax = 0;
    var cess = 0;
    var addl = 0;
    var tot = 0;
    if ($("#tax").val() != "" && $("#tax").val() != null) {
       
        tax = parseFloat($("#tax").val());
        
        
    }
    if ($("#cess").val() != "" && $("#cess").val() != null) {
        cess = parseFloat($("#cess").val());
    }
    if ($("#add").val() != "" && $("#addl").val() != null) {
        addl = parseFloat($("#addl").val());
    }
    //alert(tax+","+cess+","+addl);
    tot = parseFloat(tax) + parseFloat(cess) + parseFloat(addl);
   
    $("#total").val(tot);
};
$("#tax").keyup(function () {
    Total();
});
$("#cess").keyup(function () {
    Total();
});
$("#addl").keyup(function () {
    Total();
});

});

