<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
		table.center {
			margin-top:125px;
            margin-left: auto;
            margin-right:auto;
            background-color:cadetblue;
            
		}
        td{
            width:fit-content;
        }
        body{
            background-color: aqua;
        }
       
	</style>
</head>
<body>
    
    <form>
        <table class="center">
            <caption><h1>Registration Form</h1></caption>
            <tr>
                <td>Enter Your Name </td>
                <td><input type="text" name="First" placeholder="First Name">
                <input type="text" name="Last" placeholder="Last Name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="male">Male&nbsp;<input type="radio" name="female">Female</td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="number" name="semester"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
				<td>Mobile No </td>
				<td> <input type="tel" name="mobile no"></td>
			</tr>
            
            <tr>
                <td>Address</td>
                <td><textarea name="address" rows="3"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit">&nbsp;<input type="reset" value="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>