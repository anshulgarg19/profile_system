<?php


   require("../includes/config.php");
 
   if($_SERVER["REQUEST_METHOD"]=== "POST")
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
                       
        $perinfo=query("INSERT INTO perinfo(id,name,homeadd,busadd) VALUES(?,?,?,?)",
                            $_SESSION["id"],$_POST["name"],$_POST["haddress"],$_POST["baddress"]);
        if($perinfo === false)                    
        {
            apologize("Sorry.Cannot insert personal info.");
        }
        
        $numinfo=query("INSERT INTO numinfo(id,dob,anniv,homenum,busnum,fax) VALUES(?,?,?,?,?,?)",
                                $_SESSION["id"],$_POST["birthday"],$_POST["anniversary"],
                                         $_POST["hnum"],$_POST["bnum"],$_POST["fax"]);
                                         
        if($numinfo === false)
        {
            apologize("Sorry.Cannot update number info.");
        }
        
        $reminder=query("INSERT INTO reminder(id,pass,income,driving,property,med) VALUES(?,?,?,?,?,?)",
                            $_SESSION["id"],$_POST["pass"],$_POST["incometax"],
                            $_POST["driving"],$_POST["propertytax"],$_POST["medical"]); 
        
        if($reminder=== false)
        {
           apologize("Sorry..cannot insert reminders.");
        }
        
        $getperinfo=query("SELECT * FROM perinfo WHERE id=?",$_SESSION["id"]);
        if($getperinfo === false)
             apologize("Cannot select personal info");
        $getnuminfo=query("SELECT * FROM numinfo WHERE id=?",$_SESSION["id"]);
        if($getnuminfo === false)
           apologize("Cannot get detais");
        $getreminder=query("SELECT * FROM reminder WHERE id=?",$_SESSION["id"]);
        if($getreminder === false)
           apologize("Cannot get the reminders");
         
                   
        render("../templates/show_memo.php",["perinfo" => $getperinfo,"numinfo"=>$getnuminfo,
                                   "reminder"=>$getreminder, "title"=> "MEMO"]);                                                                    
   }
   
   else {
     $numbers=query("SELECT * FROM users WHERE id=?",$_SESSION["id"]);
     if($numbers === false)
        apologize("cannot select info.");
     if($numbers[0]["number"] == 1 )
     {   
         $update=query("UPDATE users SET number=number+1 WHERE id=?",$_SESSION["id"]);
         if($update === false)
            apologize("Cannot update number"); 
         render("form_memo.php",["title" => "MEMO"]);
     }
     else
     {
        $getperinfo=query("SELECT * FROM perinfo WHERE id=?",$_SESSION["id"]);
        if($getperinfo === false)
             apologize("Cannot select personal info");
        $getnuminfo=query("SELECT * FROM numinfo WHERE id=?",$_SESSION["id"]);
        if($getnuminfo === false)
           apologize("Cannot get detais");
        $getreminder=query("SELECT * FROM reminder WHERE id=?",$_SESSION["id"]);
        if($getreminder === false)
           apologize("Cannot get the reminders");
        /*$update=query("UPDATE users SET number=number+1");
        if($update === false)
            apologize("Cannot update number");*/  
                   
        render("../templates/show_memo.php",["perinfo" => $getperinfo,"numinfo"=>$getnuminfo,
                                   "reminder"=>$getreminder, "title"=> "MEMO"]);
      }
    }                               
     
?>
