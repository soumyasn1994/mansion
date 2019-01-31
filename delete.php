<?php
include "cons.php";
$kid=$_GET["id"];
mysqli_query($con,"DELETE FROM `tb_add` WHERE id='$kid'");
header("Location:stud.php");
?>