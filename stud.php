<?php
include "cons.php";
$sql="SELECT * From tb_add";

	//$rec=mysqli_query($con,$sql);
	

	$records= mysqli_query($con,$sql);
    //print_r($records);
 ?>
 <html>
 <body>
 
<bold> <a onclick='SAVE'  href='add.php'>ADD</a></bold>

<center><table width="50%" border="1" cellpadding="1" cellspacing="1"></center>
	
<tbody>
<tr>
<th>Name</th>
<th>Address</th>
<th>Mobile</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>
<?php
while($result=mysqli_fetch_assoc($records)){
	?>
<tr>
	<td>
		  <?php 
				
				  echo $result['Username']?>
	</td>
	<td>
		 <?php echo $result['Address']; ?>
    </td>
    <td>
		<?php echo $result['Mob']; ?>	
    </td>
    <td>
        <a href="edit.php">Edit</a>
</td>
<td>
        <a href='delete.php?id=<?php echo $result["id"];?>'>Delete</a>
</td>
   
   
    
<?php
}
?>
  