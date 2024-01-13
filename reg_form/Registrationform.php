<html>
<body>
<form action="cathch1.php"  method="get">
<table bgcolor="#ac936e" align="center">
<tr><td><th><b>Registration Form</b></th></td></tr>
<tr><td>Username:</td><td><input type="text" name="username" /></td></tr>

<tr><td>Password:</td><td><input type="number" name="pass" /></td></tr>

<tr><td>Name:</td><td><input type="text" name="my_name" /></td></tr>

<tr><td>Address:</td><td><input type="text" name="add" /></td></tr>

<tr>
<td>Country:</td><td>
 <select id="Country" name="Country">
 <option>(Please select a Country)</option>
 <option>India</option>
<option >US</option>
<option>Australia</option></select></td></tr>
	
<tr><td>Zip code:</td><td><input type="number" name="zcode" /></td></tr>
<br/>

<tr><td>Email:</td><td><input type="email" name="email" /></td></tr>
<br/>

<tr><td>Sex:</td><td><input type="radio" name="sex" />
 <label for="Female">Female</label>
 <input type="radio" name="sex" />
  <label for="Male">Male</label></td></tr>

<tr><td>Language:</td><td><input type="checkbox" name="language" />
<label="Eng" >English</label>
<input type="checkbox" name="language" />
<label="Non-eng">Non-English</label></br></td></tr>

<tr><td>About:</td><td><input type="textarea" rows="	6" cols="30" name="abt"/></td></tr>
<br />
<tr><td align="center" colspan="2">
<input type="submit" name="submit" /></td></tr>
<br/> 
</table>
</form>
</body>
</html>