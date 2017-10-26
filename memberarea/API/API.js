function hideIt() {
    $(document).ready(function () {
        $("#alumniform").hide(500);
    });
}
function showCard(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("outter-wp").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","showCards.php",true);
    xmlhttp.send();
}
function registerReunion(year) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("alumniform").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","registerReunion.php?year="+year,true);
    xmlhttp.send();
}
function registerAlumni(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("alumniform").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","registerAlumni.php",true);
    xmlhttp.send();
}
function validate(inputs) {
    if(inputs === "" || inputs.length < 3){
        return false;
    }else{
        return true;
    }
}

$(document).ready(function () {

    var arrayService = [];
    var arrayHelp = [];

    showCard();

    $('body').on('click','.btn.btn-danger.reunion',function () {

        $("#alumniform").hide(500);

        var year = $(this).text();

        registerReunion(year);

        $("#alumniform").show(1000);
    });
    $('body').on('click','.btn.btn-danger.alumni',function () {

        $("#alumniform").hide(500);

        registerAlumni();

        $("#alumniform").show(1000);
    });
    $('body').on('click','.extraService',function () {

        var valueService = $(this).val();

        if(this.checked){
            arrayService.push(valueService)
        }else{
            arrayService.splice(arrayService.indexOf(valueService),1);
        }
        console.log(arrayService);
    });
    $('body').on('click','.extraHelp',function () {
        var valueHelp = $(this).val();
        if(this.checked){
            arrayHelp.push(valueHelp);
        }else{
            arrayHelp.splice(arrayHelp.indexOf(valueHelp),1);
        }
        console.log(arrayHelp);
    });
    $('body').on('click','.btn.btn-danger.submit',function () {
        
        var fname = $("#fname").val();
        var mname = $("#mname").val();
        var lname = $("#lname").val();
        var email = $("#email").val();
        var year = $(this).attr('data-year');
        var uid = $(this).attr('data-id');

        if(validate(fname) === false){
            $("#fname").attr("placeholder", "Invalid first name").val("").focus().blur();
            $("#fname").effect("shake", {}, 1000);
            $("#fname").effect("highlight", {}, 10000);
            return;
        }
        if(validate(lname) === false){
            $("#lname").attr("placeholder", "Invalid last name").val("").focus().blur();
            $("#lname").effect("shake", {}, 1000);
            $("#lname").effect("highlight", {}, 10000);
            return;
        }
        if(validate(email) === false){
            $("#email").attr("placeholder", "Invalid last name").val("").focus().blur();
            $("#email").effect("shake", {}, 1000);
            $("#email").effect("highlight", {}, 10000);
            return;
        }

        $.ajax({
            type: "POST",
            url: "API/submitReunion.php",
            data: {fname:fname,lname:lname,mname:mname,email:email,year:year,uid:uid,service:arrayService,help:arrayHelp},
            dataType: 'json',
            success: function(data){
                var key = data.key;
                var message = data.message;
                if(key === "0"){
                    swal("Error!",message,"error");
                }else{
                    swal("Thank You!",message,"success");
                }
            }
        });
    });
    $('body').on('click','.btn.btn-danger.exp',function () {
        var qone = $("#gurbage").val();
        var qtwo = $("input[name=optradio]:checked"). val();
        var qthree = $("input[name=emp]:checked"). val();
        var uid = $(this).attr('data-id');

        console.log('q1'+qone+'q2'+qtwo+'q3'+qthree+'uid'+uid);

        $.ajax({
            type: "POST",
            url: "API/submitAlumni.php",
            data: {qone:qone,qtwo:qtwo,qthree:qthree,uid:uid},
            dataType: 'json',
            success: function(data){
                var key = data.key;
                var message = data.message;
                if(key === "0"){
                    swal("Error!",message,"error");
                }else{
                    swal("Thank You!",message,"success");
                }
            }
        });
    });
});
