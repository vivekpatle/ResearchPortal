<!doctype html>
<html lang = "en">
<head>
<meta charset = "utf - 8"/>
<title id="cv_title"> THE LOGIN PAGE </title>
<link rel= "stylesheet" type= "text/css" href = "loginpage.css">
</head>
<body>

<form action="inputlogin.php" method="post">
<div class="container">


    <label><b>First Name of the student</b></label>
    <input type="text" placeholder="Enter first name" name="sname" required>
    <label><b>Last Name of the student</b></label>
    <input type="text" placeholder="Enter last name" name="lname" required>
    <label><b>College/Department</b></label>
    <input type="text" placeholder="Enter college name" name="college" required>
    <label><b>enter university roll number</b></label>
    <input type="number" placeholder="Enter roll number" name="rollnumber" required>
    <button type="submit" id ="login">Login </button>

      </div>
</form>
</body>
</html>