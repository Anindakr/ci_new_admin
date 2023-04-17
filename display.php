<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table border="1" align="center">
	<tr>
		<th>Sl_No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Date of Birth</th>
		<th>Password</th>
		<th>Education</th>
		<th>Gender</th>
		<th>Language</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
	<?php
	$i=1;
	foreach ($data as $row)
	{
	?>
	<tr>
		<td align="center" align="center"><?php echo $i;$i++;?></td>
		<td align="center"><?php echo $row->name?></td>
		<td align="center"><?php echo $row->email?></td>
		<td align="center"><?php echo $row->phone?></td>
		<td align="center"><?php echo $row->dob?></td>
		<td align="center"><?php echo $row->password?></td>
		<td align="center"><?php echo $row->education?></td>
		<td align="center"><?php echo $row->gender?></td>
		<td align="center"><?php echo $row->language?></td>
		<td align="center"><img src="<?php echo base_url().$row->picsource?>" height="50" width="50"></td>
		<td><a href="editdata?ep=<?php echo $row->uid?>">Edit</a>
			<a href="deletedata?del=<?php echo $row->uid?>">Delete</a></td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>