<?php

    // configuration
    require("../includes/config.php");
//    require("PHPMailer/class.phpmailer.php");   //library for emails
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if (empty($_POST["username"]))
        {
            apologize("You must provide a username");
        }
        if (empty($_POST["email"]))
        {
            apologize("You must give an email..");
        }
        if($_POST["email"] != $_POST["conemail"])
        {
            apologize("Confirm your email.");
        }        
        if (empty($_POST["password"])) 
        {
            apologize("You must provide a password");
        }
        if ( $_POST["password"] != $_POST["confirmation"])
        {
            apologize("Confirmation Invalid");
        }
        
        $login=date('d-m-Y h:i:s');
        $newuser=query("INSERT INTO users(username,email,hash,number,login) VALUES(?,?,?,1,?)", 
                         $_POST["username"] ,$_POST["email"] ,crypt($_POST["password"]),$login);
        
        if ($newuser === false )
        {
             apologize("Duplicate username.Try again.");
        }
        
        $rows=query("SELECT LAST_INSERT_ID() AS id");
        $id=$rows[0]["id"];
        
        $_SESSION["id"]=$id;
      

        
        $mail = new PHPMailer();
                 $date=date('d-m-Y h:i:s');
    
        $mail->Username = "*****"; // your GMail user name
        $mail->Password = "*****"; 
        $mail->AddAddress($_POST["email"]); // recipients email
        $mail->FromName = "APP World Team"; // readable name

        $mail->Subject = "Successful Login";
        $mail->Body    = "You have successfully Logged into your App world account \n"."Usename: ".$row["username"]."\n".
                           "at ".$date; 
        
        $mail->Host = "ssl://smtp.gmail.com"; // GMail
        $mail->Port = 465;
        $mail->IsSMTP(); // use SMTP
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->From = $mail->Username;
        if(!$mail->Send())
            apologize( "Mailer Error: " . $mail->ErrorInfo);
        
        redirect("index.php");                                
    }
    else
    {
        // else render form
        render("form_register.php", ["title" => "Register"]);
    }

?>
