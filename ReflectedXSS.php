<!DOCTYPE html>
<html>
<title> XSS Tutorial #2 </title>
<body>
<table align="center">
<tr><td>
<form action="" method="get">
	<input type="text" name="search" placeholder="search" />
	<input type="submit" value="Search" />
</form>
</td></tr>
</table>
<br />
<br />
<p align="center">
<?php
if(isset($_GET["search"]))
{
	echo "The results of your search for: ".$_GET["search"];
	echo "<br /><br /> <i>Sorry No Results Found! </i>";
}
?>
</p>

</body>
</html> 