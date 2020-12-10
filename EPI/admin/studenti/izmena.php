<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Izmena studenta</title>
<link rel="stylesheet" href="../includes/style.css" type="text/css" media="screen" />
</head>
<body>

<?php 

include ('../includes/header.html');

echo "<h1>Izmena studenta</h1>
<p></p>
<h3><a href=\"index.php\"> Pregled studenata</a></h3>
<p></p>
<h3><a href=\"..\"> Početna strana</a></h3>
<p></p>";
?>

<?php 
	 $id=$_REQUEST['id']; 
	 
   $link=mysqli_connect("localhost","root","","mydb") or die("Cannot Connect to the database!");
		
	 $query="SELECT * FROM studenti WHERE id_student='".$id."'";
		
		 $resource=mysqli_query($link,$query) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
		  $result=mysqli_fetch_array($resource);
		  
	 ?>
     <form id="form1" name="form1" method="get" action="izmena1.php">
        <table align="center" width="291" border="0">
          <tr>
            <td width="129"><strong>Ime</strong></td>
            <td width="152">
            <input type="hidden" name="id" value="<?php echo $result[0] ?>"  />
            <label>
              <input name="ime" type="text" id="textfield" value="<?php echo $result[1] ?>" />
            </label>
	    </td>
          </tr>
           <tr>
            <td><strong>Prezime</strong></td>
            <td><input name="prezime" type="text" id="textfield2" value="<?php echo $result[2] ?>" /></td>
          </tr>
           <tr>
            <td><strong>Broj indeksa</strong></td>
            <td><input name="br_indeksa" type="text" id="textfield3" value="<?php echo $result[3] ?>" /></td>
          </tr>
            <tr>
            <td><strong>Adresa</strong></td>
            <td><input name="adresa" type="text" id="textfield4" value="<?php echo $result[4] ?>" /></td>
          </tr>   
	  <tr>
            <td><strong>Mesto</strong></td>
            <td><input name="mesto" type="text" id="textfield5" value="<?php echo $result[5] ?>" /></td>
          </tr>
	  <tr>
            <td><strong>Dat. rođ.</strong></td>
            <td><input name="datum_rodj" type="text" id="textfield6" value="<?php echo $result[6] ?>" /></td>
          </tr>
	  <tr>
            <td><strong>E-mail</strong></td>
            <td><input name="email" type="text" id="textfield7" value="<?php echo $result[7] ?>" /></td>
          </tr>
	  <tr>
            <td><strong>Password</strong></td>
            <td><input name="sifra" type="text" id="textfield8" value="<?php echo $result[8] ?>" /></td>
          </tr>
	  <tr>
            <td><strong>Tel 1</strong></td>
            <td><input name="tel1" type="text" id="textfield9" value="<?php echo $result[9] ?>" /></td>
          </tr>
	  <tr>
            <td><strong>Tel 2</strong></td>
            <td><input name="tel2" type="text" id="textfield10" value="<?php echo $result[10] ?>" /></td>
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