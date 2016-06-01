<div class="spe">
<table align="center">
<tr ><?php print($nature) ?><br/></tr>
<tr><?php if($deter < 0) : printf("%.2f +i%.2f",$root1,$root2) ?><br/></tr>
<tr><?php printf("%.2f -i%.2f",$root1,$root2) ?></tr>
<tr><?php else : printf("%.2f",$root1) ?><br/></tr>
<tr><?php printf("%.2f",$root2) ?></tr>
<?php endif ?>
</table>
</div>
<div class="empty"></div>
<div><a href="index.php">Applist</a></div> 
 <div id="bottom">
 <a style="color:sienna" href="logout.php">LogOut</a></div>
