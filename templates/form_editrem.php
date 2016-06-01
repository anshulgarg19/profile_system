<div class="editinfo"><h3>PERSONAL DETAILS</h3>
<table>
<tr>
<th>Name: </th><?php print("<td>".$perinfo[0]["name"]."</td>")?></tr>
<tr><th>
Home Address:</th><?php print("<td>".$perinfo[0]["homeadd"]."</td>")?></tr>
<tr><th>
Business Address:</th><?php print("<td>".$perinfo[0]["busadd"]."</td>")?></tr>
<tr><th>
Birthday:</th><?php print("<td>".$numinfo[0]["dob"]."</td>") ?>
<th>Anniversary:</th><?php print("<td>".$numinfo[0]["anniv"]."</td>")?></tr>
<tr><th>Home Phone num:</th><?php print("<td>".$numinfo[0]["homenum"])?>
<th>Business num:</th><?php print("<td>".$numinfo[0]["busnum"]."</td>")?>
<th>Fax:</th><?php print("<td>".$numinfo[0]["fax"]."</td>")?></tr>
</table></div>
<h3>REMINDERS</h3><br/>
<div id="bmi"><form action="editrem.php" method="post"><table align="center">
<tr style="margin:15px"><td style="width:200px"><input type="checkbox" name="pass"/>Passport</td>
<td style="width:200px"><input type="checkbox" name="incometax"/>Income Tax</td>
</tr><tr style="margin:15px"><td style="width:200px"><input type="checkbox" name="driving"/>D Licence</td>
<td ><input type="checkbox" name="propertytax"/>Property Tax</td></tr>
<tr style="margin:45px"><input type="checkbox" name="medical"/>Medical Check Up</tr>
</table></div>
<div>
<button type="submit" class="btn">SAVE</button>
</form>
</div>
<div id="app"><a href="index.php">Applist</a></div> 
 <div id="bottom">
 <a style="color:sienna" href="logout.php">LogOut</a></div>
