<?php

   require("../includes/config.php");
   
   if($_SERVER["REQUEST_METHOD"]== "POST")
   {
       if(empty($_POST["mass"]))
       {
          apologize("Sorry..Enter your mass.");
       }
       if(empty($_POST["unit-mass"]))
       {
          apologize("sorry..mention a unit first");
       }
       if(empty($_POST["height"]))
       {
          apologize("sorry..Enter your height");      
       }
       if(empty($_POST["unit-height"]))
       {
          apologize("Sorry..select unit first");   
       }
       if(!is_numeric($_POST["mass"])|| !is_numeric($_POST["height"]))
       {
          apologize("Sorry..integer only");
       }   
       if($_POST["unit-mass"] == "pound") 
       {
           $mass_kg=$_POST["mass"] * 0.45;
       }
       else if($_POST["unit-mass"]=="kg"){
          $mass_kg=$_POST["mass"];
        }  
       if($_POST["unit-height"] == "inch")
       {
          $height_m=$_POST["height"] * 0.025;
       }
       else if($_POST["unit-height"]=="metre"){
           $height_m=$_POST["height"];
        }
        $bmi=$mass_kg / ($height_m * $height_m);
        
        if ($bmi<15.0)
          $category="Very Severely Underweight";
        else if($bmi>=15.0 && $bmi<16.0)
           $category="Severely Underweight";
        else if($bmi>=16.0 && $bmi<18.5)
           $category="Under Weight";
        else if($bmi>=18.5 && $bmi<25.0)
           $category="Optimal Weight";
        else if($bmi>=25.0 && $bmi<30.0)
          $category="Over Weight";
        else if ($bmi>=30.0 && $bmi<35)
          $category="Moderately Obese";
       else if($bmi>=35.0 && $bmi<40.0)
          $category="Severely Obese";
       else if($bmi>= 40.0)
          $category="Very Severely Obese";        
        
        $bmiprime=$bmi/25;           
        
        render("../templates/show_bmi.php",["bmi"=> $bmi ,"bmiprime" => $bmiprime , "category" => $category ,"title"=> "BMI"]);
      }
      
      else{
        render("form_bmi.php",["title"=> "BMI"]);
      }
      
?>        
        
        
        
       
       
       
              
