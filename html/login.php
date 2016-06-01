<?php

    // configuration
    require("../includes/config.php"); 
//`    require("PHPMailer/class.phpmailer.php");  //library for emails
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["email"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE email = ?", $_POST["email"]);
        
        $lastlogin=date('d-m-Y h:i:s');
        $updatelogin=query("UPDATE users SET login=?",$lastlogin);
        if($updatelogin === false)
            apologize("Cannot update login details."); 
        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (crypt($_POST["password"], $row["hash"]) == $row["hash"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];


                $mail = new PHPMailer();
                 $date=date('d-m-Y h:i:s');
    
                $mail->Username = "*****"; // your GMail user name
                $mail->Password = "*****"; 
                $mail->AddAddress($_POST["email"]); // recipients email
                $mail->FromName = "APP Space Team"; // readable name

                $mail->Subject = "Successful Login";
                $mail->Body    = "You have successfully Logged into your App space account \n"."     Usename: ".$row["username"]."\n".
                                   "     at ".$date; 
                
                $mail->Host = "ssl://smtp.gmail.com"; // GMail
                $mail->Port = 465;
                $mail->IsSMTP(); // use SMTP
                $mail->SMTPAuth = true; // turn on SMTP authentication
                $mail->From = $mail->Username;
                if(!$mail->Send())
                    apologize( "Mailer Error: " . $mail->ErrorInfo);
    
           
                  
                // redirect to portfolio
                redirect("/");
        //        render("index.php",[]);
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }
    else
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

?>
