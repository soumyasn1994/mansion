<?php
 include "cons.php";
 if (isset($_POST["ok"]))
{
$name=$_POST["sname"];
$add=$_POST["sadd"];
$mob=$_POST["mob"];
$sql="INSERT INTO `tb_add`(`Username`, `Address`, `Mob`) VALUES ('$name','$add','$mob')";
mysqli_query($con,$sql);

//echo "$name<br>";
//echo "$add";
//echo "$mob";
}
 ?>

<html>
<head>
</head>
<body>
    <form action="#" method="post">
 <table>
  <tr>
    <td>Name
    </td>
    <td>
     <input type="text" name="sname">
    </td>
</tr>
<tr>
    <td> Address
    </td>
    <td>
        <input type="text" name="sadd">
    </td>
</tr>
<tr>
<td>Mobile
    </td>
   <td>
        <input type="text" name="mob">.
    </td>
</tr>
<tr>
    <td></td>
    <td>
        <input type="submit" value="OK" name="ok">
    </td>
</tr>

</table>


