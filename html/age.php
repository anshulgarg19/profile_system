<?php

  require("../includes/config.php");
  
  if($_SERVER["REQUEST_METHOD"]== "POST" )
  {
     if(empty($_POST["bir_date"]) || empty($_POST["bir_month"]) || empty($_POST["bir_year"]))
     {
        apologize("Sorry.Enter your birth details first..");
     }
     if(empty($_POST["age_date"]) || empty($_POST["age_month"]) || empty($_POST["age_year"]))   
     {
        apologize("Sorry..Enter your present details first..");
     }
     if($_POST["bir_year"] > $_POST["age_year"])
     {
        apologize("Ahha..you are not born as of now..");
     }
     if($_POST["bir_month"] <= $_POST["age_month"])
     {
         $year=$_POST["age_year"]-$_POST["bir_year"];
         if($_POST["bir_date"] <= $_POST["age_date"])
         {
            $day=$_POST["age_date"]-$_POST["bir_date"];
            $month=$_POST["age_month"]-$_POST["bir_month"];
         }
         else if($_POST["bir_date"]> $_POST["age_date"])    
         {
            $prevmon=$_POST["age_month"] - 1;
            $month=$_POST["age_month"] - $_POST["bir_month"] -1;
            if($prevmon==1 || $prevmon==3 || $prevmon==5 || $prevmon==7 || $prevmon==8 || $prevmon==10 ||$prevmon==0)
               $day=31-$_POST["bir_date"] + $_POST["age_date"];
            else
                $day=30-$_POST["bir_date"] + $_POST["age_date"];
         }
      }
      else if($_POST["bir_month"] > $_POST["age_month"] )
      {
          $year=$_POST["age_year"]-$_POST["bir_year"] - 1;
          if($_POST["bir_date"] <= $_POST["age_date"]  )
          {
              $day=$_POST["age_date"] - $_POST["bir_date"];
              $month=12 - $_POST["bir_month"] + $_POST["age_month"];
          }
          else if($_POST["bir_date"] > $_POST["age_date"])
          {
             $month=12 + $_POST["age_month"] - $_POST["bir_month"] -1;   
             $prevmon=$_POST["age_month"] - 1;
             if($prevmon==1 || $prevmon==3 || $prevmon==5 || $prevmon==7 || $prevmon==8 || $prevmon==10 ||$prevmon==0)
                $day=31-$_POST["bir_date"] + $_POST["age_date"];
             else
                $day=30-$_POST["bir_date"] + $_POST["age_date"];
           }
       }  
         
         
         render("show_age.php",["year"=>$year,"month"=>$month,"day"=>$day,"title"=> "Age"]);
         
     }
     
     else{
         render("form_age.php",["title"=> "Age"]);
     }    
?>                                
