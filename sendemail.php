<?php
    /*
    WP Post Template: Selection Template
    */
?>


<html>

<head>
    <title> testing </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        function validateForm() {
            var x = document.forms["testForm"]["navn"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>
</head>

<body>
    
<?PHP

    // to send mail
    if (isset($_POST['submitted']))
    {
        $user = $_POST['navn'];
        $to = "sekdemir@gmail.com";
        $subject = "New Email Address for Mailing List";
        $headers = "From: $email\n";
        $message = $_POST['info'];
        // $message = "A visitor to your site has sent the following email address to be added to your mailing list.\n 
        // Email Address: $email";
    
        $usersubject = "Thank You";
        $userheaders = "From: " + $user;
        $usermessage = $message;
        if (mail($to, $subject, $message, $headers))
        {
            echo "mail sent";
        }
        else
        {
            echo "mail failed";
        }
        // mail($to,$subject,$message,$headers);
        // mail($user,$usersubject,$usermessage,$userheaders);
    }

?>   

<div class="container">
        <h3> Welcome to the portal! </h3>
        <div class="dataForm">
            <div class="row">
                <div class="col-sm-2">
                    <?php 
                        // <img src="',$image,'" width="50" height="50" />
                        echo '<img src="./images/logoer/',$logo_name,'" width="100" height="100">';
                    ?>
                    <!--<img src="./images/logo-test.png" width="100" height="100">-->
                </div>
                <div class="col-sm-8">
                    <form name="testForm" action="#" method="post">
                        <div class="row">
                            <div class="form-group col-xs-8">
                                <label for="email">Navn på menighet: </label>
                                <input type="text" class="form-control" name="navn">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-8">
                                <label for="pwd">Dato for kollekt:</label>
                                <input type="date" class="form-control" name="dato">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-8">
                                <label for="pwd">Eventuell annen info til organisasjon:</label>
                                <input type="text" class="form-control" name="info">
                            </div>
                        </div>

                        <button type="submit" name="submitted" id="submitted" class="btn btn-default">Send inn</button>
                    </form>
                </div>
                <div class="col-sm-2">
                    Some other extra info here
                </div>
            </div>

        </div>

    </div>

</body>