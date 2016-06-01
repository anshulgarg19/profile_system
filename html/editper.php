<?php


   require("../includes/config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
    $updateper=query("UPDATE perinfo SET name=? , homeadd=?, busadd=? WHERE id=?",$_POST["name"],$_POST["haddress"],$_POST["baddress"],$_SESSION["id"]);
    if ($updateper=== false)
        apologize("Cannot update personal info");
    
    $reminder=query("SELECT * FROM reminder WHERE id=?",$_SESSION["id"]);
    if($reminder=== false)
       apologize("Cannot select reminders");
    $perinfo=query("SELECT * FROM perinfo WHERE id =?",$_SESSION["id"]);
    if($perinfo === false) 
       apologize("Cannot select perinfo");
    $numinfo=query("SELECT * FROM numinfo WHERE id=?",$_SESSION["id"]);
    if($numinfo === false) 
       apologize("Cannot slect numinfo");
       
    render("show_memo.php",["perinfo" => $perinfo,"numinfo" => $numinfo,"reminder"=> $reminder,"title"=>"MEMO"]);           
   }
   
   else
   {
    $numinfo=query("SELECT * FROM numinfo WHERE id=?",$_SESSION["id"]);
    if($numinfo === false)
      apologize("Cannot select numinfo");
      
    $reminder=query("SELECT * FROM reminder WHERE id =?",$_SESSION["id"]);  
    if($reminder=== false)
       apologize("Cannot select reminders");
    render("form_editper.php",["numinfo"=> $numinfo, "reminder"=> $reminder, "title"=> "Edit Info"]);   
       
   }
   
   
?>   
