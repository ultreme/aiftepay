<?php
//recuperation des 10 derniers messages de la shoutbox
$sql = "SELECT * FROM aiftepay_shoutbox ORDER BY id DESC LIMIT 0,10";
$requete = mysql_query($sql);

?>
<?php 
while($tribune = mysql_fetch_array($requete)) {
$auteur = htmlentities(stripslashes($tribune['auteur']));
$message = htmlentities(stripslashes($tribune['message']));

echo "[<strong>".$auteur."</strong>] : ".$message."<br />";
}
?>					
					<br />
					<form name="shoutbox" action="shoutbox_script.php" method="post">
						<input class="text" maxlength="130" type="text" name="auteur" value="auteur" style="width:49px;"/>
						<input class="text" maxlength="250" type="text" name="message" value="message"/>
						<input class="submit" type="submit" value="ok" />
					</form>