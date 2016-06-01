<?php

   require("../includes/config.php");
   
   if($_SERVER["REQUEST_METHOD"]=="POST" )
   {
      if(empty($_POST["vala"]) || empty($_POST["valb"]) || empty($_POST["valc"]))
      {
         apologize("Sorry..Enter the coefficients first");
      }
      $deter=($_POST["valb"]*$_POST["valb"])-(4*$_POST["vala"]*$_POST["valc"]);
      
      if($deter == 0)
      {
         $nature="Roots are real and equal.";
         $root1= (-$_POST["valb"])/(2*$_POST["vala"]);
         $root2=$root1;
      }
      else if($deter > 0)
      {
         $nature="Roots are real and distinct."; 
         $root1=((-$_POST["valb"]) + sqrt($deter))/(2*$_POST["vala"]);     
         $root2=((-$_POST["valb"]) - sqrt($deter))/(2*$_POST["vala"]);
      }
      else if($deter < 0)
      {
          $nature="Roots are complex and distinct.";
          $root1=(-$_POST["valb"])/(2*$_POST["vala"]);
          $root2= sqrt(-$deter)/(2*$_POST["vala"]);

         /* $root1= "$realpart + i$imagpart";
          $root2= "$realpart - i$imagpart";*/
      }
      
      
      render("../templates/show_quad.php",["deter"=> $deter,"nature" => $nature,"root1" => $root1 ,"root2"=> $root2, "title"=>"ROOTS"]);
  }
  else
     render("form_quad.php",["title"=> "ROOTS"]);
    
?>         
      
          
