<?php


  require("../includes/config.php");
  
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $updatenum=query("UPDATE numinfo SET dob=? , anniv=?, homenum=?,busnum=?
                          ,fax=? WHERE id=?",$_POST["birthday"],$_POST["anniversary"],$_POST["hnum"],
                           $_POST["bnum"],$_POST["fax"],$_SESSION["id"]);
    if ($updatenum=== false)
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
  
  else{
  $perinfo=query("SELECT * FROM perinfo WHERE id=?",$_SESSION["id"]);
  if($perinfo === false)
     apologize("Cannot select perinfo");
  $reminder=query("SELECT * FROM reminder WHERE id=?",$_SESSION["id"]);
  if($reminder === false)
     apologize("Cannot select reminders");
  render("form_editnum.php",["perinfo"=> $perinfo,"reminder"=>$reminder,"title"=>"Edit Info"]);
  }

?>
  
     
