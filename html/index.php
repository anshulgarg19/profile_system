<?php

    // configuration
    require("../includes/config.php"); 

    // render portfolio
    $detail=query("SELECT * FROM users WHERE id=?",$_SESSION["id"]);
    if($detail === false)
    {
       apologize("Cannot fetch details..");
    }   
    render("../templates/applist.php", ["username"=>$detail[0]["username"],"login"=>$detail[0]["login"] ,"title" => "Apps"]);

?>
