
<?php
 include "cons.php";
 if (isset($_POST["ok"]))
{
$name=$_POST["sname"];
$add=$_POST["sadd"];
$mob=$_POST["mob"];
$query="UPDATE  tb_add SET  Username='$name' ,  Address='$add' ,  Mob='$mob' ,  
WHERE Emp_id ='$ud_ID'";
//echo $query;
 mysqli_query($con,$query);

//echo "$name<br>";
//echo "$add";
//echo "$mob";
}
 ?>