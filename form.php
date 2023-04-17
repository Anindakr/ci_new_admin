<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<table border="1" align="center">
	<tr>
		<td colspan="2" align="center">Registration Form</td>
	</tr>
	<tr>
		<td>Enter Name:</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Enter E-mail:</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Enter Phone:</td>
		<td><input type="text" name="phone"></td>
	</tr>
	<tr>
		<td>Enter dob:</td>
		<td><input type="date" name="dob"> </td>
	</tr>
	<tr>
		<td>Enter Password:</td>
		<td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td>Select Education:</td>
		<td><select name="education">
			<option>Select</option>
			<option>Madhyamik</option>
			<option>H.S.</option>
			<option>B.Tech</option>
			<option>M.Tech</option>
		</select></td>
	</tr>
	<tr>
		<td>Select Gender:</td>
		<td><input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Others">Others </td>
	</tr>
	<tr>
		<td>Select Language:</td>
		<td><input type="checkbox" name="language[]" value="Bengali">Bengali
			<input type="checkbox" name="language[]" value="English">English
			<input type="checkbox" name="language[]" value="Hindi">Hindi </td>
	</tr>
	<tr>
		<td>Upload Image:</td>
		<td><input type="file" name="uploadimage"> </td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="Reset"> </td>
	</tr>
	</table>
</form>
</body>
</html>