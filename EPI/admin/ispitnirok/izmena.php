<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Izmena ispitnog roka</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Izmena ispitnog roka</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled ispitnih rokova</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>
<p></p>";
?>

<?php 
   $id=$_REQUEST['id']; 
   
   $link= @mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		  
	 $sql = "SELECT * FROM ispitni_rok WHERE id_ir='".$id."'";
	 
		
		 $resource=mysqli_query($link,$sql) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
		  $result=mysqli_fetch_array($resource);
		  
	 ?>
     <form id="form1" name="form1" method="get" action="izmena1.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Naziv ispitnog roka</strong></td>
            <td width="152">
            <input type="hidden" name="id" value="<?php echo $result[0] ?>"  />
           

            <input type="text" name="name" id="textfield" />
            </td>
          </tr>
        </table>
        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Izmeni" />
          </label>
        </p>
        <p align="center"></p>
      </form>

<?php
include ('../includes/footer.html');
?>

</body>
</html>