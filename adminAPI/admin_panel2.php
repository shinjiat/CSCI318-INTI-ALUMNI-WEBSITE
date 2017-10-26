<!DOCTYPE html>
<html>
<head>

    <?php include ('header.php'); ?>
    <meta charset="UTF-8">
    <title>Login Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <style>

        html { width: 100%; height:100%; overflow:hidden; }

        body {
            width: 100%;
            height:100%;
            font-family: 'Open Sans', sans-serif;
            background: #092756;
            background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        }

        .login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

        input {
            width: 100%;
            margin-bottom: 10px;
            background: rgba(0,0,0,0.3);
            border: none;
            outline: none;
            padding: 10px;
            font-size: 13px;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
            border: 1px solid rgba(0,0,0,0.3);
            border-radius: 4px;
            box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
            -webkit-transition: box-shadow .5s ease;
            -moz-transition: box-shadow .5s ease;
            -o-transition: box-shadow .5s ease;
            -ms-transition: box-shadow .5s ease;
            transition: box-shadow .5s ease;
        }
        input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

        .hide{
            display: none;
        }

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="text-center">

    </div>
    <br>
    <div class="container aside-xl">
        <section class="m-b-lg">

            <header class="wrapper text-center">
                <button type="submit" name="workshop" id="workshop" class="btn btn-lg btn-danger btn-block">
                    <span class="fa fa-book"></span> Add Workshop</button>
            </header>
            
            <form action="addworkshop.php" method="post">
                <input type="hidden" name="do" value="login">
                <div class="hide" id="workshop-div"><h3 style="color:white">Workshop Details</h3>
                    <div class="list-group-item">
                        <input type="text" name="title" placeholder="Title" class="form-control no-border" required><br/>
                        <input type="text" name="date" placeholder="Date" class="form-control no-border" required><br/>
                        <input type="text" name="slot" placeholder="Slot" class="form-control no-border" required><br/>
                        <textarea rows="4" cols="50" id="content" placeholder="About Workshop"></textarea>
                        <input type="submit" name="submit_workshop" id="submit_workshop" class="btn btn-lg btn-danger btn-block"></button>
                    </div>
                </div>

            </form>

            <header class="wrapper text-center">
                <button type="submit" name="research" id="research" class="btn btn-lg btn-danger btn-block">
                    <span class="fa fa-binoculars"></span> Add Research</button>
            </header>
            <form action="addprogram.php" method="post">
                <input type="hidden" name="do" value="login">
                <div class="hide" id="research-div">
                    <div class="list-group-item">
                        <input type="text" name="name" placeholder="Program Name" class="form-control no-border"><br/>
                        <input type="submit" name="submit_program" id="submit_program" class="btn btn-lg btn-danger btn-block"></button>
                    </div>

                </div>
            </form>

            <header class="wrapper text-center">
                <button type="submit" name="vmessage" id="vmessage" class="btn btn-lg btn-danger btn-block">
                    <span class="fa fa-eye"></span> View Messages</button>
            </header>
            <form action="addsubject.php" method="post">
                <input type="hidden" name="do" value="login">
                <div class="hide" id="vmessage-div">
                    <div class="list-group-item">
                        <input type="text" name="scode" placeholder="Subject Code" class="form-control no-border"><br/>
                        <input type="text" name="sname" placeholder="Subject Name" class="form-control no-border"><br/>
                        <select class="form-control no-border" name="sprogram">
                            <option value="">Select Subject Program</option>
                            <?php   $sql_getprogram = mysqli_query($dbconfig,"select * from program");
                            while($row_result = mysqli_fetch_array($sql_getprogram))
                            {
                                $pcategory = $row_result['pcategory'];
                                echo '<option value="'.$pcategory.'">'.$pcategory.'</option>';
                            }?>
                        </select>
                        <input type="text" name="credit" placeholder="Credit hour" class="form-control no-border"><br/>
                        <input type="submit" name="submit_subject" id="submit_subject" class="btn btn-lg btn-danger btn-block"></button>
                    </div>

                </div>
            </form>

            <header class="wrapper text-center">
                <button type="submit" name="vworkshop" id="vworkshop" class="btn btn-lg btn-danger btn-block">
                    <span class="fa fa-eye"></span> View Workshop</button>
            </header>
            <form action="addprogram.php" method="post">
                <input type="hidden" name="do" value="login">
                <div class="hide" id="vworkshop-div">
                    <div class="list-group-item">
                        <input type="text" name="name" placeholder="Program Name" class="form-control no-border"><br/>
                        <input type="submit" name="submit_program" id="submit_program" class="btn btn-lg btn-danger btn-block"></button>
                    </div>

                </div>
            </form>

            <header class="wrapper text-center">
                <button type="submit" name="vjobs" id="vjobs" class="btn btn-lg btn-danger btn-block">
                    <span class="fa fa-eye"></span> View Jobs</button>
            </header>
            <form action="addprogram.php" method="post">
                <input type="hidden" name="do" value="login">
                <div class="hide" id="vjobs-div">
                    <div class="list-group-item">
                        <input type="text" name="name" placeholder="Program Name" class="form-control no-border"><br/>
                        <input type="submit" name="submit_program" id="submit_program" class="btn btn-lg btn-danger btn-block"></button>
                    </div>

                </div>
            </form>
        </section>
    </div>
</section>

<script src="js/assign.js"></script>

</body>
</html>


<?php
session_start();
    $msg = $_SESSION['msg'];
    if ($msg == "success"){
        echo '<div class="alert alert-success">
      <strong>Success!</strong> Record updated.
      </div>';
        $_SESSION['msg'] = "";
    }
    else if($msg == "error"){
        echo '<div class="alert alert-warning">
      <strong>Warning!</strong> Record not updated, check again your query or value you submitted.
      </div>';
        $_SESSION['msg'] = "";
    }
    else if($msg == "exist")
    {
        echo '<div class="alert alert-warning">
      <strong>Warning!</strong> The record you entered already existed, record not updated.
      </div>';
        $_SESSION['msg'] = "";
    }
    else{
        $_SESSION['msg'] = "";
    }

?>