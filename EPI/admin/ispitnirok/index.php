<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pregled prijavljenih ispita</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Ispitni rokovi</h1>
<p></p>
<h3><a href=\"unos_ir.php\"> Unos ispitnog roka</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>";
?>


<div id="main1">
<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Pregled ispitnih rokova</h1>
</p>
   </td>
  </tr>



<?php 
		  $link= @mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		  
	 $sql = "SELECT * FROM ispitni_rok";
	 if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			echo "
			<table align=\"center\" border=\"0\" width=\"100%\">
			<tr>
			<td><b>ID</b></td> <td><b>Naziv Ispitnog Roka</b></td> <td><b>Izmeniti</b></td> <td><b>Brisanje</b></td>
			</tr> ";
			while($row = mysqli_fetch_array($result)){
				echo "<tr><td>".$row['id_ir']."</td><td>".$row['naziv_ir']."</td> <td> <a href=\"izmena.php?id=".$row['id_ir']."\"> Izmeniti </a> </td>
	<td> <a href=\"brisati.php?id=".$row['id_ir']."\"> Brisanje </a> </td>
	</tr>";
			}
			echo "</table>";
			
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
		
	
	 ?>

</table>
<h1 align="center" class="heading">&nbsp;</h1>
</div>


<?php
include ('../includes/footer.html');
?>

</body>
</html>