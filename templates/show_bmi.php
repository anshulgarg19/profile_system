<div id="spe">
   Your BMI is <?php printf("%.2f",$bmi) ?>..<br/>
   You are <?php  echo $category?>..<br/>
   Your BMI prime is <?php printf("%.2f",$bmiprime) ?>..
 </div>  
 <div id="bmtab">
 <table align="center" border="1">
 <tr align="center">
 <th>Category</th>
 <th>BMI Range-kg/m<sup>2</sup></th>
 <th style="width:200px">BMI Prime</th>
 </tr>
 <tr>
 <td>Very Sevely Underweight</td>
 <td>less than 15</td>
 <td>less than 0.60</td>
 </tr>
 <tr>
 <td>Severely Underweight</td>
 <td>from 15 to 16</td>
 <td>from 0.60 to 0.64</td>
 </tr>
 <tr>
 <td>Under Weight</td>
 <td>from 16 to 18.5</td>
 <td>from 0.64 to 0.74</td>
 </tr>
 <tr>
 <td>Normal(healthy weight)</td>
 <td>from 18.5 to 25</td>
 <td>from 0.74 to 1</td>
 </tr>
 <tr>
 <td>Overweight</td>
 <td>from 25 to 30</td>
 <td>from 1 to 1.2</td>
 </tr>
 <tr>
 <td>Obese Class I(Moderately obese)</td>
 <td>from 30 to 35</td>
 <td>from 1.2 to 1.4</td>
 </tr>
 <tr>
 <td>Obese Class II(Severely obese)</td>
 <td>from 35 to 40</td>
 <td>from 1.4 to 1.6</td>
 </tr>
 <tr>
 <td>Obese Class III(Very Severely Obese)</td>
 <td>over 40</td>
 <td>over 1.6</td>
 </tr>
 </table></div>
 <div><a href="index.php">Applist</a></div>
 <div class="empty"></div>
 <div id="bottom">
 <a style="color:sienna" href="logout.php">LogOut</a></div>
