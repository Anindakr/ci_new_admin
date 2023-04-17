<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<?php
	foreach($data as $row)
	{
	?>
	<table border="1" align="center">
	<tr>
		<td colspan="2" align="center">Registration Form</td>
	</tr>
	<tr>
		<td>Enter Name:</td>
		<td><input type="text" name="name" value="<?php echo $row->name?>"></td>
	</tr>
	<tr>
		<td>Enter E-mail:</td>
		<td><input type="text" name="email" value="<?php echo $row->email?>"></td>
	</tr>
	<tr>
		<td>Enter Phone:</td>
		<td><input type="text" name="phone" value="<?php echo $row->phone?>"></td>
	</tr>
	<tr>
		<td>Enter dob:</td>
		<td><input type="date" name="dob" value="<?php echo $row->dob?>"> </td>
	</tr>
	<tr>
		<td>Select Education:</td>
		<td><select name="education">
			<option>Select</option>
			<option <?php if($row->education=='Madhyamik'){echo "selected";}?>>Madhyamik</option>
			<option <?php if($row->education=='H.S.'){echo "selected";}?>>H.S.</option>
			<option <?php if($row->education=='B.Tech'){echo "selected";}?>>B.Tech</option>
			<option <?php if($row->education=='M.Tech'){echo "selected";}?>>M.Tech</option>
		</select></td>
	</tr>
	<tr>
		<td>Select Gender:</td>
		<td><input type="radio" name="gender" value="Male"<?php if($row->gender=='Male'){echo "checked";} ?>>Male
			<input type="radio" name="gender" value="Female"<?php if($row->gender=='Female'){echo "checked";} ?>>Female
			<input type="radio" name="gender" value="Others"<?php if($row->gender=='Others'){echo "checked";} ?>>Others </td>
	</tr>
	<?php
	$lanarray=explode(",", $row->language)
	?>
	<tr>
		<td>Select Language:</td>
		<td><input type="checkbox" name="language[]" value="Bengali"<?php if(in_array("Bengali",$lanarray)=='Bengali'){echo "checked";}?>>Bengali
			<input type="checkbox" name="language[]" value="English"<?php if(in_array("English",$lanarray)=='English'){echo "checked";}?>>English
			<input type="checkbox" name="language[]" value="Hindi"<?php if(in_array("Hindi",$lanarray)=='Hindi'){echo "checked";}?>>Hindi </td>
	</tr>
	<tr>
		<td>Upload Image:</td>
		<td><input type="file" name="uploadimage"><img src="<?php echo base_url().$row->picsource?>" height="50" width="50"> </td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Submit">
		</td>
	</tr>
	</table>
	<?php
	}
	?>
</form>
</body>
</html>