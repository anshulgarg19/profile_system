<div id="bmi"><h3>PERSONAL DETAILS</h3><form action="editper.php" method="post">
<table>
<tr>
<th>Name:</th><td><input autofocus type="text" name="name"/></td></tr>
<tr><th>Home Address:</th><td><input type="text" name="haddress"/></td></tr>
<tr><th>Business Address:</th><td><input style="height:30px" type="text" name="baddress"/></td></tr></table>
<div id="save"><button type="submit" class="btn">SAVE</button></div></form></div>

<div class="editinfo"><table>
<tr><th>Birthday:</th><?php print("<td>".$numinfo[0]["dob"]."</td>") ?>
<th>Anniversary:</th><?php print("<td>".$numinfo[0]["anniv"]."</td>")?></tr>
<tr><th>Home Phone num:</th><?php print("<td>".$numinfo[0]["homenum"])?>
<th>Business num:</th><?php print("<td>".$numinfo[0]["busnum"]."</td>")?>
<th>Fax:</th><?php print("<td>".$numinfo[0]["fax"]."</td>")?></tr>
</table></div>
<h3>REMINDERS</h3><br/>
<div class="info"><table align="center">
<tr><th>Passport:</th><?php print("<td>".$reminder[0]["pass"]."</td>")?>
<th>Income Tax:</th><?php print("<td>".$reminder[0]["income"]."<td>")?></tr>
<tr><th>D Licence:</th><?php print("<td>".$reminder[0]["driving"]."</td>")?>
<th>Property Tax:</th><?php print("<td>".$reminder[0]["property"]."</td>")?></tr>
<tr><th>Medical Check up:</th><?php print("<td>".$reminder[0]["med"])?></tr>
</table></div>
<div id="app"><a href="index.php">Applist</a></div>
<div id="bottom"><a style="color:sienna" href="logout.php">Log Out</a></div>
