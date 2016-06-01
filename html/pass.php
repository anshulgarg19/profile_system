<?php

   require("../includes/config.php");
   
   if($_SERVER["REQUEST_METHOD"]== "POST")
   {
     /* if(empty($_POST["cur_pass"]))
        aplogize("Enter the current password first.");
     */ if(empty($_POST["new_pass"]))  
         apologize("Enetr the new password.");
      if(empty($_POST["confirmation"]))
         apologize("Enter the confirmaion");   
      
      /*$oldpass=query("SELECT * FROM users WHERE id=?",$_SESSION["id"]);
      if($oldpass=== false)
         apologize("Cannot select oldpassword.");
         
      if($oldpass[0]["hash"] != crypt($_POST["cur_pass"]))
         apologize("Current passwords don't match.");
        */    
      if($_POST["new_pass"] != $_POST["confirmation"])   
         apologize("Confir your password again");
         
      $updatepass=query("UPDATE users SET hash=?",crypt($_POST["new_pass"]));   
      
      render("show_pass.php",["title"=> "Successful"]);
    }
    
    else
       render("form_pass.php",["title"=>"Change Password"]);  
?>       
