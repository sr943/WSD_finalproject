<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body background="register.jpg">


<style>
label{
width: 5em;
float: right;
text-align: left;
margin-right: 68.0em;
display: block;
}
</style>
<h3><center>Register</center></h3>
<form action="index.php?page=accounts&action=register" method="post">
    First name: <label><input type="text" name="fname"></label><br><br>
    Last name: <label><input type="text" name="lname"></label><br><br>
    Email: <label><input type="text" name="email"></label><br><br>
    Phone: <label><input type="text" name="phone"></label><br><br>
    Birthday: <label><input type="text" name="birthday"></label><br><br>
    Gender: <label><input type="text" name="gender"></label><br><br>
    Password: <label><input type="password" name="password"></label><br><br>
    <input type="submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
