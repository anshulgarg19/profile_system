<?php

 require("../includes/config.php");
 
 if($_SERVER["REQUEST_METHOD"]== "POST")
 {
        if(empty($_POST["pass"]))
           $_POST["pass"]="off";
        if(empty($_POST["incometax"]))
           $_POST["incometax"]="off";
        if(empty($_POST["driving"]))
           $_POST["driving"]="off";
        if(empty($_POST["propertytax"]))
           $_POST["propertytax"]="off";
        if(empty($_POST["medical"]))
           $_POST["medical"]="off";
         
 $updaterem=query("UPDATE reminder SET pass=? , income=?, driving=?,property=?
                          ,med=? WHERE id=?",$_POST["pass"],$_POST["incometax"],$_POST["driving"],
                           $_POST["propertytax"],$_POST["medical"],$_SESSION["id"]);
    if ($updaterem=== false)
        apologize("Cannot update reminders");
    
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
  $numinfo=query("SELECT * FROM numinfo WHERE id=?",$_SESSION["id"]);
  if($numinfo === false)
     apologize("Cannot select numinfo");
  render("form_editrem.php",["perinfo"=> $perinfo,"numinfo"=>$numinfo,"title"=>"Edit Info"]);
  }

?>
 
