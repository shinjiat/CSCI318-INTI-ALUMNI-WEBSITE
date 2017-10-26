/**
 * Created by julfi on 14/06/2017.
 */
$(document).ready(function () {


    // $('body').on('click','#addUser2',function () {
    //     document.getElementById("pan").innerHTML = "";
    //     addUser('test');
    //     $('#addWorkShopForm').show(1000);
    //     $('#searchBar').hide();
    //     $('#outter-wp').hide();
    // });

    $('body').on('click','#addUser',function () {
        $('#searchBarEdit').hide();
        $('#searchBar').hide();
        $('#outter-wp').hide();
        
        addUser("str");
    });

    $('body').on('click','#editUser',function () {
        document.getElementById("pan").innerHTML = "";
        $('#searchBarEdit').show(1000);
        $('#searchBar').hide();
        $('#outter-wp').hide();
    });


    $('body').on('click','#deleteUser',function () {
        document.getElementById("pan").innerHTML = "";
        $('#searchBar').show(1000);
        $('#searchBarEdit').hide();
        $('#outter-wp').hide();
    });

        $('body').on('click','#addWorkshop',function () {
        document.getElementById("pan").innerHTML = "";
        $('#searchBar').hide();
        $('#searchBarEdit').hide();
        $('#outter-wp').hide();
    });






    $('body').on('click','#searchSubmit',function () {

        var query = $('#searchText').val();
        var file = 'deleteUser';
        search(query);
    });

    $('body').on('click','#editSubmit',function () {

        var query = $('#editText').val();
        edit(query);
    });


    $('body').on('click','.btn.btn-danger.delete',function () {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "POST",
            url: "deleteUser.php",
            data: {id:id},
            dataType: 'json',
            success: function(data){
                var key = data.key;
                var message = data.message;
                if(key === "0"){
                    swal("Error!",message,"error");
                }else{
                    swal("Done!",message,"success");
                }
            }
        });
    });

    jQuery('#searchText').on('input propertychange paste', function() {

        var query = $('#searchText').val();
        search(query);
    });

    jQuery('#editText').on('input propertychange paste', function() {

        var query = $('#editText').val();
        edit(query);
    });

       function addUser(str) {
       document.getElementById("pan").innerHTML = "";
     $('#pan').hide();
     $('#outter-wp').show(1000);
       if (str === "") {
           document.getElementById("outter-wp").innerHTML = "";
       } else {
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
           xmlhttp.open("GET","addUser.php",true);
           xmlhttp.send();
       }
   }


    function edit(query) {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("pan").innerHTML = this.responseText;
            }else{
                document.getElementById("pan").innerHTML = "No Result";
                $('#searchText').effect("highlight", {}, 1000);
            }
        };
        xmlhttp.open("GET","editUser.php?search="+query,true);
        xmlhttp.send();
    }



    function search(query){
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("pan").innerHTML = this.responseText;
            }else{
                document.getElementById("pan").innerHTML = "No Result";
                $('#searchText').effect("highlight", {}, 1000);
            }
        };
        xmlhttp.open("GET","deleteUser.php?query="+query,true);
        xmlhttp.send();
    }

    $('body').on('click','.btn.btn-success.david',function () {

       var skill = [];
       var rate = [];
       var lang = [];

       var id = $(this).attr('data-id');
       var fname = $('#Efname').val();
       var lname = $('#Elname').val();
       var email = $('#Eemail').val();
       var position = $('#Eposition').val();
       var langOne = $('#ElanguageOne').val();
       var langTwo = $('#ElanguageTwo').val();
       var langThree = $('#ElanguageThree').val();
       var bio = $('#Ebiography').val();
       var phone = $('#Ephone').val();
       var skillOne = $('#Eskill1').val();
       var skillTwo = $('#Eskill2').val();
       var skillThree = $('#Eskill3').val();
       var skillFour = $('#Eskill4').val();
       var rateOne = $('#Erate1').val();
       var rateTwo = $('#Erate2').val();
       var rateThree = $('#Erate3').val();
       var rateFour = $('#Erate4').val();
       var dob = $('#Edate').val();
       var country = $('#Ecountry').val();
       var office = $('#Eoffice').val();

       skill.push(skillOne);
       skill.push(skillTwo);
       skill.push(skillThree);
       skill.push(skillFour);

       rate.push(rateOne);
       rate.push(rateTwo);
       rate.push(rateThree);
       rate.push(rateFour);

       lang.push(langOne);
       lang.push(langTwo);
       lang.push(langThree);

       console.log(id+fname+lname+email+position+bio+phone+dob+country+office+skill+rate+lang);

        var base64 = getBase64Image(document.getElementById("davidImg"));

        var fullPath = document.getElementById('Efile').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
        }
        var timestamp = new Date().getUTCMilliseconds();
        var newFile = id+timestamp+filename;

        var check = 0;

        $.ajax({
            type: "POST",
            url: "imageUpload.php",
            data: {id:id,data:base64,name:newFile},
            dataType: 'json',
            success: function(data){
                var key = data.key;
                var message = data.image;
                if(key === "0"){
                    //swal("Error!",message,"error");
                    console.log(message);
                    check = 1;
                }else{
                    console.log(message);
                    //swal("Done!",message,"success");
                }
            }
        });

        if(check === 0){
            $.ajax({
                type: "POST",
                url: "editApi.php",
                data: {id:id,fname:fname,lname:lname,email:email,pos:position,bio:bio,phone:phone,dob:dob,country:country,office:office,skill:skill,rate:rate,lang:lang},
                dataType: 'json',
                success: function(data){
                    var key = data.key;
                    var message = data.message;
                    if(key === "0"){
                        swal("Error!",message,"error");
                    }else{
                        swal("Done!",message,"success");
                    }
                }
            });
        }

    });

    $('body').on('click','.btn.btn-success.chigga',function () {

        var skill = [];
        var rate = [];
        var lang = [];

        var fname = $('#Afname').val();
        var lname = $('#Alname').val();
        var username = $('#Ausername').val();
        var pass = $('#Apass').val();
        var email = $('#Aemail').val();
        var position = $('#Aposition').val();
        var langOne = $('#AlanguageOne').val();
        var langTwo = $('#AlanguageTwo').val();
        var langThree = $('#AlanguageThree').val();
        var bio = $('#Abiography').val();
        var phone = $('#Aphone').val();
        var skillOne = $('#Askill1').val();
        var skillTwo = $('#Askill2').val();
        var skillThree = $('#Askill3').val();
        var skillFour = $('#Askill4').val();
        var rateOne = $('#Arate1').val();
        var rateTwo = $('#Arate2').val();
        var rateThree = $('#Arate3').val();
        var rateFour = $('#Arate4').val();
        var dob = $('#Adate').val();
        var country = $('#Acountry').val();
        var office = $('#Aoffice').val();

        skill.push(skillOne);
        skill.push(skillTwo);
        skill.push(skillThree);
        skill.push(skillFour);

        rate.push(rateOne);
        rate.push(rateTwo);
        rate.push(rateThree);
        rate.push(rateFour);

        lang.push(langOne);
        lang.push(langTwo);
        lang.push(langThree);

        console.log(fname+lname+email+position+bio+phone+dob+country+office+skill+rate+lang);

        var base64 = getBase64Image(document.getElementById("chiggaImg"));

        var fullPath = document.getElementById('Afile').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
        }
        var timestamp = new Date().getUTCMilliseconds();
        var newFile = timestamp+filename;
        var id = "";
        var finalPath = "";
            $.ajax({
                type: "POST",
                url: "addApi.php",
                data: {path:finalPath,user:username,pass:pass,fname:fname,lname:lname,email:email,pos:position,bio:bio,phone:phone,dob:dob,country:country,office:office,skill:skill,rate:rate,lang:lang},
                dataType: 'json',
                success: function(data){
                    var key = data.key;
                    var message = data.message;
                    if(key === "0"){
                        //swal("Error!",message,"error");
                    }else{
                        //swal("Done!",message,"success");
                        console.log("log"+message);
                        id = message;
                    }
                }
            });

        window.setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "imageUpload.php",
                data: {id:id,data:base64,name:newFile},
                dataType: 'json',
                success: function(data){
                    var key = data.key;
                    var message = data.message;
                    finalPath = data.image;
                    if(key === "0"){
                        swal("Error!",message,"error");
                        console.log(message);
                        check = 1;
                    }else{
                        console.log(message);
                        swal("Done!",message,"success");
                    }
                }
            });
        },2000);
    });
    function getBase64Image(img) {
        var canvas = document.createElement("canvas");
        canvas.width = img.width;
        canvas.height = img.height;
        var ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0);
        var dataURL = canvas.toDataURL("image/png");
        return dataURL; //.replace(/^data:image\/(png|jpg);base64,/, "")
    }

    window.setInterval(function () {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#davidImg').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#Efile").change(function() {
            readURL(this);
        });
    },300);

    window.setInterval(function () {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#chiggaImg').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#Afile").change(function() {
            readURL(this);
        });
    },300);
});