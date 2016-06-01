<h3>PERSONAL DETAILS</h3>
<div id="edit"><a href="editper.php">Edit</a></div>
<div class="info">
<table>
<tr>
<th>Name: </th><?php print("<td>".$perinfo[0]["name"]."</td>")?></td></tr>
<tr><th>
Home Address:</th><?php print("<td>".$perinfo[0]["homeadd"]."</td>")?></tr>
<tr><th>
Business Address:</th><?php print("<td>".$perinfo[0]["busadd"]."</td>")?></tr></table></div>
<div id="edit"><a href="editnum.php">Edit</a></div>
<div class="info">
<table>
<tr><th>
Birthday:</th><?php print("<td>".$numinfo[0]["dob"]."</td>") ?>
<th>Anniversary:</th><?php print("<td>".$numinfo[0]["anniv"]."</td>")?></tr>
<tr><th>Home Phone num:</th><?php print("<td>".$numinfo[0]["homenum"])?>
<th>Business num:</th><?php print("<td>".$numinfo[0]["busnum"]."</td>")?>
<th>Fax:</th><?php print("<td>".$numinfo[0]["fax"]."</td>")?></tr>
</table></div>
<div class="rem">
<h3>REMINDERS</h3><br/>
<table align="center">
<tr><th>Passport:</th><?php print("<td>".$reminder[0]["pass"]."</td>")?>
<th>Income Tax:</th><?php print("<td>".$reminder[0]["income"]."<td>")?></tr>
<tr><th>D Licence:</th><?php print("<td>".$reminder[0]["driving"]."</td>")?>
<th>Property Tax:</th><?php print("<td>".$reminder[0]["property"]."</td>")?></tr>
<tr><th>Medical Check up:</th><?php print("<td>".$reminder[0]["med"])?>
</table></div>
<div id="edit"><a href="editrem.php">Edit</a></div>
<div id="app"><a href="index.php">Applist</a>
</div>
<div id="bottom"><a style="color:sienna" href="logout.php">Log Out</a></div>
