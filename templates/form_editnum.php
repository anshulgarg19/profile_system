<div class="editinfo"><h3>PERSONAL DETAILS</h3>
<table>
<tr>
<th>Name: </th><?php print("<td>".$perinfo[0]["name"]."</td>")?></tr>
<tr><th>
Home Address:</th><?php print("<td>".$perinfo[0]["homeadd"]."</td>")?></tr>
<tr><th>
Business Address:</th><?php print("<td>".$perinfo[0]["busadd"]."</td>")?></tr>
</tabel></div>
<div id="bmi">
<form action="editnum.php" method="post"><table>
<tr><th>Birthday:</th><td><input style="margin:15px" name="birthday" type="text"/></td>
<th>Anniversary:</th><td><input name="anniversary" type="text"/></td></tr>
<tr><th>Home Phone num:</th><td><input type="text" name="hnum"/></td>
<th>Business</th><td><input type="text" name="bnum"/></td>
<th>Fax</th><td><input type="text" name="fax"/></td></tr><td>
</form></table></div>
<div id="save"><button type="submit" class="btn">SAVE</button></div>
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
