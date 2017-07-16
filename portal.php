<!DOCTYPE html>
<html>
    <body>
        Wellcome <?php echo $_POST["navn"]; ?> ! <br>
        You are registered to the following: <br>
        <?php echo $_POST["info"]; ?> <br>

        Email is just being sent now! <br>
        <?PHP
            $email = "sekdemir@gmail.com";
            $to = "sekdemir@gmail.com";
            $subject = "New Email Address for Mailing List";
            $headers = "From: $email\n";
            $message = "A visitor to your site has sent the following email address to be added to your mailing list.\n 
            Email Address: $email";
            
            $user = "$email";
            $usersubject = "Thank You";
            $userheaders = "From: you@youremailaddress.com\n";
            $usermessage = $_POST["navn"];
            mail($to,$subject,$message,$headers);
            mail($user,$usersubject,$usermessage,$userheaders);
        ?>        
    </body>
</html>