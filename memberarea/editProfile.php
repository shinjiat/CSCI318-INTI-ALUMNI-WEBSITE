<!DOCTYPE html>
<html>
<head>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- jQuery -->
  <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
  <!-- lined-icons -->
  <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <!-- //lined-icons -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/amcharts.js"></script>
  <script src="js/serial.js"></script>
  <script src="js/light.js"></script>
  <script src="js/radar.js"></script>
  <link href="css/barChart.css" rel='stylesheet' type='text/css' />
  <link href="css/fabochart.css" rel='stylesheet' type='text/css' />
  <!--clock init-->
  <script src="js/css3clock.js"></script>
  <!--Easy Pie Chart-->
  <!--skycons-icons-->
  <script src="js/skycons.js"></script>

  <script src="js/jquery.easydropdown.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="SHORTCUT ICON" href="images/logo.png" />
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
session_start();
  include('../db/dbconfig.php');
  ?>

    <!--sub-heard-part-->
    <div class="sub-heard-part">
          <ol class="breadcrumb m-b-0">
           <li><a href="index.php">Home</a></li>
           <li class="active">Edit Profile</li>
         </ol>
   </div>
    <!--//sub-heard-part-->
    <!--/profile-->

      <!-- main jobs state -->
      <?php
      include ('../db/dbconfig.php');
      $id = $_SESSION['globalID'];
      $sql = mysqli_query($dbconfig, "Select * from _user WHERE id ='$id'");
      while($r = mysqli_fetch_array($sql)){
        $picture = 'http://intialumni.16mb.com/memberarea' . $r['picture'];
        $fname = $r['fname'];
        $lname = $r['lname'];
        $full_name = $r['fname'] . " " . $r['lname'];
        $phone = $r['phone'];
        $country = $r['country'];
        $email = $r['email'];
        $language1 = $r['language1'];
        $language2 = $r['language2'];
        $language3 = $r['language3'];
        $biography = $r['biography'];
        $office = $r['office'];
        $position = $r['position'];
        }

        echo'  <div class="forms-main">
      <h2 class="inner-tittle">Edit Profile</h2>
        <div class="graph-form">
            <div class="validation-form">
                  <!---->

                    <form action ="updateProfile.php" method="post" enctype="multipart/form-data">
                      <div class="vali-form">
                      <div class="col-md-6 form-group1">
                        <label class="control-label">Firstname</label>
                        <input name ="fname" type="text" placeholder="Firstname"  value='.$fname.'>
                      </div>
                      <div class="col-md-6 form-group1 form-last">
                        <label class="control-label">Lastname</label>
                        <input name ="lname" type="text" placeholder="Lastname"  value='.$lname.'>
                      </div>
                      <div class="clearfix"> </div>
                      </div>

                      <div class="vali-form">

                      </div>


                      <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label">Email</label>
                        <input name="email" type="text" placeholder="Email"  value="'.$email.'">
                      </div>
                       <div class="clearfix"> </div>
                      <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label">Current Position</label>
                        <input name="position" type="text" placeholder="Current Position"  value ="'.$position.'">
                      </div>
                       <div class="clearfix"> </div>
                        <div class="col-md-12 form-group2 group-mail">
                        <label class="control-label">Language</label>
                      <select name="language1">
                      <option value="'.$language1.'">'.$language1.'</option>
                        <option value="AF">Afrikanns</option>
                        <option value="SQ">Albanian</option>
                        <option value="AR">Arabic</option>
                        <option value="HY">Armenian</option>
                        <option value="EU">Basque</option>
                        <option value="BN">Bengali</option>
                        <option value="BG">Bulgarian</option>
                        <option value="CA">Catalan</option>
                        <option value="KM">Cambodian</option>
                        <option value="ZH">Chinese (Mandarin)</option>
                        <option value="HR">Croation</option>
                        <option value="CS">Czech</option>
                        <option value="DA">Danish</option>
                        <option value="NL">Dutch</option>
                        <option value="EN">English</option>
                        <option value="ET">Estonian</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finnish</option>
                        <option value="FR">French</option>
                        <option value="KA">Georgian</option>
                        <option value="DE">German</option>
                        <option value="EL">Greek</option>
                        <option value="GU">Gujarati</option>
                        <option value="HE">Hebrew</option>
                        <option value="HI">Hindi</option>
                        <option value="HU">Hungarian</option>
                        <option value="IS">Icelandic</option>
                        <option value="ID">Indonesian</option>
                        <option value="GA">Irish</option>
                        <option value="IT">Italian</option>
                        <option value="JA">Japanese</option>
                        <option value="JW">Javanese</option>
                        <option value="KO">Korean</option>
                        <option value="LA">Latin</option>
                        <option value="LV">Latvian</option>
                        <option value="LT">Lithuanian</option>
                        <option value="MK">Macedonian</option>
                        <option value="MS">Malay</option>
                        <option value="ML">Malayalam</option>
                        <option value="MT">Maltese</option>
                        <option value="MI">Maori</option>
                        <option value="MR">Marathi</option>
                        <option value="MN">Mongolian</option>
                        <option value="NE">Nepali</option>
                        <option value="NO">Norwegian</option>
                        <option value="FA">Persian</option>
                        <option value="PL">Polish</option>
                        <option value="PT">Portuguese</option>
                        <option value="PA">Punjabi</option>
                        <option value="QU">Quechua</option>
                        <option value="RO">Romanian</option>
                        <option value="RU">Russian</option>
                        <option value="SM">Samoan</option>
                        <option value="SR">Serbian</option>
                        <option value="SK">Slovak</option>
                        <option value="SL">Slovenian</option>
                        <option value="ES">Spanish</option>
                        <option value="SW">Swahili</option>
                        <option value="SV">Swedish </option>
                        <option value="TA">Tamil</option>
                        <option value="TT">Tatar</option>
                        <option value="TE">Telugu</option>
                        <option value="TH">Thai</option>
                        <option value="BO">Tibetan</option>
                        <option value="TO">Tonga</option>
                        <option value="TR">Turkish</option>
                        <option value="UK">Ukranian</option>
                        <option value="UR">Urdu</option>
                        <option value="UZ">Uzbek</option>
                        <option value="VI">Vietnamese</option>
                        <option value="CY">Welsh</option>
                        <option value="XH">Xhosa</option>
                      </select>
                      </div>
                       <div class="clearfix"> </div>
                       <div class="col-md-12 form-group2 group-mail">
                       <label class="control-label">Language-2</label>
                     <select name="language2">
                     <option value="'.$language2.'">'.$language2.'</option>
                       <option value="AF">Afrikanns</option>
                       <option value="SQ">Albanian</option>
                       <option value="AR">Arabic</option>
                       <option value="HY">Armenian</option>
                       <option value="EU">Basque</option>
                       <option value="BN">Bengali</option>
                       <option value="BG">Bulgarian</option>
                       <option value="CA">Catalan</option>
                       <option value="KM">Cambodian</option>
                       <option value="ZH">Chinese (Mandarin)</option>
                       <option value="HR">Croation</option>
                       <option value="CS">Czech</option>
                       <option value="DA">Danish</option>
                       <option value="NL">Dutch</option>
                       <option value="EN">English</option>
                       <option value="ET">Estonian</option>
                       <option value="FJ">Fiji</option>
                       <option value="FI">Finnish</option>
                       <option value="FR">French</option>
                       <option value="KA">Georgian</option>
                       <option value="DE">German</option>
                       <option value="EL">Greek</option>
                       <option value="GU">Gujarati</option>
                       <option value="HE">Hebrew</option>
                       <option value="HI">Hindi</option>
                       <option value="HU">Hungarian</option>
                       <option value="IS">Icelandic</option>
                       <option value="ID">Indonesian</option>
                       <option value="GA">Irish</option>
                       <option value="IT">Italian</option>
                       <option value="JA">Japanese</option>
                       <option value="JW">Javanese</option>
                       <option value="KO">Korean</option>
                       <option value="LA">Latin</option>
                       <option value="LV">Latvian</option>
                       <option value="LT">Lithuanian</option>
                       <option value="MK">Macedonian</option>
                       <option value="MS">Malay</option>
                       <option value="ML">Malayalam</option>
                       <option value="MT">Maltese</option>
                       <option value="MI">Maori</option>
                       <option value="MR">Marathi</option>
                       <option value="MN">Mongolian</option>
                       <option value="NE">Nepali</option>
                       <option value="NO">Norwegian</option>
                       <option value="FA">Persian</option>
                       <option value="PL">Polish</option>
                       <option value="PT">Portuguese</option>
                       <option value="PA">Punjabi</option>
                       <option value="QU">Quechua</option>
                       <option value="RO">Romanian</option>
                       <option value="RU">Russian</option>
                       <option value="SM">Samoan</option>
                       <option value="SR">Serbian</option>
                       <option value="SK">Slovak</option>
                       <option value="SL">Slovenian</option>
                       <option value="ES">Spanish</option>
                       <option value="SW">Swahili</option>
                       <option value="SV">Swedish </option>
                       <option value="TA">Tamil</option>
                       <option value="TT">Tatar</option>
                       <option value="TE">Telugu</option>
                       <option value="TH">Thai</option>
                       <option value="BO">Tibetan</option>
                       <option value="TO">Tonga</option>
                       <option value="TR">Turkish</option>
                       <option value="UK">Ukranian</option>
                       <option value="UR">Urdu</option>
                       <option value="UZ">Uzbek</option>
                       <option value="VI">Vietnamese</option>
                       <option value="CY">Welsh</option>
                       <option value="XH">Xhosa</option>
                     </select>
                     </div>
                      <div class="clearfix"> </div>
                      <div class="col-md-12 form-group2 group-mail">
                      <label class="control-label">Language-3</label>
                    <select name="language3">
                    <option value="'.$language3.'">'.$language3.'</option>
                      <option value="AF">Afrikanns</option>
                      <option value="SQ">Albanian</option>
                      <option value="AR">Arabic</option>
                      <option value="HY">Armenian</option>
                      <option value="EU">Basque</option>
                      <option value="BN">Bengali</option>
                      <option value="BG">Bulgarian</option>
                      <option value="CA">Catalan</option>
                      <option value="KM">Cambodian</option>
                      <option value="ZH">Chinese (Mandarin)</option>
                      <option value="HR">Croation</option>
                      <option value="CS">Czech</option>
                      <option value="DA">Danish</option>
                      <option value="NL">Dutch</option>
                      <option value="EN">English</option>
                      <option value="ET">Estonian</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finnish</option>
                      <option value="FR">French</option>
                      <option value="KA">Georgian</option>
                      <option value="DE">German</option>
                      <option value="EL">Greek</option>
                      <option value="GU">Gujarati</option>
                      <option value="HE">Hebrew</option>
                      <option value="HI">Hindi</option>
                      <option value="HU">Hungarian</option>
                      <option value="IS">Icelandic</option>
                      <option value="ID">Indonesian</option>
                      <option value="GA">Irish</option>
                      <option value="IT">Italian</option>
                      <option value="JA">Japanese</option>
                      <option value="JW">Javanese</option>
                      <option value="KO">Korean</option>
                      <option value="LA">Latin</option>
                      <option value="LV">Latvian</option>
                      <option value="LT">Lithuanian</option>
                      <option value="MK">Macedonian</option>
                      <option value="MS">Malay</option>
                      <option value="ML">Malayalam</option>
                      <option value="MT">Maltese</option>
                      <option value="MI">Maori</option>
                      <option value="MR">Marathi</option>
                      <option value="MN">Mongolian</option>
                      <option value="NE">Nepali</option>
                      <option value="NO">Norwegian</option>
                      <option value="FA">Persian</option>
                      <option value="PL">Polish</option>
                      <option value="PT">Portuguese</option>
                      <option value="PA">Punjabi</option>
                      <option value="QU">Quechua</option>
                      <option value="RO">Romanian</option>
                      <option value="RU">Russian</option>
                      <option value="SM">Samoan</option>
                      <option value="SR">Serbian</option>
                      <option value="SK">Slovak</option>
                      <option value="SL">Slovenian</option>
                      <option value="ES">Spanish</option>
                      <option value="SW">Swahili</option>
                      <option value="SV">Swedish </option>
                      <option value="TA">Tamil</option>
                      <option value="TT">Tatar</option>
                      <option value="TE">Telugu</option>
                      <option value="TH">Thai</option>
                      <option value="BO">Tibetan</option>
                      <option value="TO">Tonga</option>
                      <option value="TR">Turkish</option>
                      <option value="UK">Ukranian</option>
                      <option value="UR">Urdu</option>
                      <option value="UZ">Uzbek</option>
                      <option value="VI">Vietnamese</option>
                      <option value="CY">Welsh</option>
                      <option value="XH">Xhosa</option>
                    </select>
                    </div>
                     <div class="clearfix"> </div>
                      <div class="col-md-12 form-group1 ">
                        <label class="control-label">Biography</label>
                        <textarea name ="biography" placeholder="Your Comment..." >'.$biography.'</textarea>
                      </div>
                       <div class="clearfix"> </div>
                      <div class="vali-form">
                      <div class="col-md-6 form-group1">
                        <label class="control-label">Phone Number</label>
                        <input name="phone" type="text" placeholder="Phone Number" value='.$phone.'>
                      </div>
                      <div class="col-md-6 form-group1 form-last">
                        <label class="control-label">Mobile Number</label>
                        <input type="text" placeholder="Mobile Number">
                      </div>
                      <div class="clearfix"> </div>
                      </div>
                      
                      ';
      for($i = 1; $i <= 4 ; $i++){

      echo'
                      <div class="clearfix"> </div>
                      <div class="col-md-6 form-group1">
                        <label class="control-label">Enter Skill '.$i.'</label>
                        <select name="skill">';

                        $sql_skill = mysqli_query($dbconfig, "Select * from skill");
                        while($r = mysqli_fetch_array($sql_skill)){
                            $sname = $r['sname'];
                            echo ' <option value="'.$sname.'">'.$sname.'</option>';
                        };

                       echo'
                        </select>
                        
                      </div>
                      <div class="col-md-6 form-group1 form-last">
                        <label class="control-label">Rate Skill ' .$i.'</label>
                        <select name="skill">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
          
                      </div>';
      }
      echo'                
                      <div class="clearfix"> </div>

                       <div class="clearfix"> </div>

                      <div class="col-md-12 form-group1 group-mail">
                        <label class="control-label ">Date of Birth</label>
                        <input name="dob" type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" >
                      </div>
                       <div class="clearfix"> </div>
                       <div class="clearfix"> </div>
                        <div class="col-md-12 form-group2 group-mail">
                        <label class="control-label">Country</label>
                      <select name="country">
                      <option value="'.$country.'">'.$country.'</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia, Plurinational State of</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Côte dIvoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curaçao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran, Islamic Republic of</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic Peoples Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao Peoples Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territory, Occupied</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Réunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthélemy</option>
                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin (French part)</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten (Dutch part)</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.S.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                      </select>
                      </div>
                       <div class="clearfix"> </div>
                       <div class="col-md-12 form-group1 ">
                        <label class="control-label">Enter Office Location</label>
                        <textarea name="office" placeholder="" value='.$office.'>'.$office.'</textarea>
                      </div>
                      <br><br>
                      <label class="custom-file" style="width:100%;">
                        <label class="control-label">Upload Profile Picture : </label>
                        <input type="file" name="file" class="custom-file-input" value="" >
                        <span class="custom-file-control"></span>
                      </label>

                       <div class="clearfix"> </div>

                      <div class="col-md-12 form-group button-2">
                        <button type="submit" name="submit_profile" class="btn btn-primary" style="background-color:green">Submit</button>
                        <button type="reset" class="btn btn-default" style="background-color:red">Reset</button>
                      </div>

                      </form>
                         </div>
                      <div class="clearfix"> </div>

                    </div>



                  <!---->
          </div>';



          ?>



<script src="modify.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
