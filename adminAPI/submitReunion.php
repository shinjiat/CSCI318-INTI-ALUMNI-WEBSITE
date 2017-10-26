<?php
require_once ('../../db/dbconfig.php');

$serviceSplice = "";
$helpSplice = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $uid = $_POST['uid'];
    $service = $_POST['service'];
    $help = $_POST['help'];

    for($i = 0; $i < sizeof($service); $i++){
        $serviceSplice .= serviceFullForm($service[$i]).'#';
    }
    for($i = 0; $i< sizeof($help); $i++){
        $helpSplice .= helpFullForm($help[$i]).'#';
    }
    try{

        $serviceSplice = mysqli_real_escape_string($dbconfig,$serviceSplice);
        $helpSplice = mysqli_real_escape_string($dbconfig,$helpSplice);

        $query = mysqli_query($dbconfig,"insert into reunion (uid,fname,mname,lname,email,year,service,uhelp) values ('$uid','$fname','$mname','$lname','$email','$year','$serviceSplice','$helpSplice')");
        if($query){
            $arr = array(
                'message'=>'Form successfully submitted',
                'key'=>'1'
            );
            echo json_encode($arr);
        }else{
            $arr = array(
                'message'=>'Something went wrong. Please try again later',
                'key'=>'0'
            );
            echo json_encode($arr);
        }
    }catch (mysqli_sql_exception $exception){
        $arr = array(
            'message'=>$exception,
            'key'=>'0'
        );
        echo json_encode($arr);
    }
}
function serviceFullForm($data){
    switch ($data){
        default:
            $string = "";
            break;
        case "CTE":
            $string = "Encourage reunion attendance over the summer by calling/texting/emailing my classmates";
            break;
        case "PFG":
            $string = "Post content or add comments to our private Class Facebook group";
            break;
        case "PCR":
            $string = "Contribute photos or/and memorabilia that can be used in the Class Book or onsite reunion activities";
            break;
        case "ABC":
            $string = "I don't know yet, but I'd like to help in some way so please contact me";
            break;
    }
    return $string;
}
function helpFullForm($data){
    switch ($data){
        default:
            $string = "";
            break;
        case "IAG":
            $string = "Yes, I know who I want to gather and am ready to receive a contact list of my group members early";
            break;
        case "NOT_READY":
            $string = "I'm not ready now, but contact me later this year";
            break;
        case "LEARN_MORE":
            $string = "I'd like to learn more about Mini-Reunions";
            break;
    }
    return $string;
}