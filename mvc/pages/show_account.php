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

<body>

<h1>Email: <?php echo $data->email; ?></h1>
<h1>First Name: <?php echo $data->fname; ?></h1>
<h1>Last Name: <?php echo $data->lname; ?></h1>


<?php
//this is how you print something  $data contains the record that was selected on the table.

print utility\htmlTable::generateTableFromOneRecord($data);

?>

<style>
label{
width: 5em;
float: right;
text-align: left;
margin-right: 68.0em;
display: block;
}
</style>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <label><input type="text" name="fname" value="<?php echo $data->fname; ?>"></label><br><br>
    Last name: <label><input type="text" name="lname" value="<?php echo $data->lname; ?>"></label><br><br>
    Email: <label><input type="text" name="email" value="<?php echo $data->email; ?>"></label><br><br>
    Phone: <label><input type="text" name="phone" value="<?php echo $data->phone; ?>"></label><br><br>
    Birthday: <label><input type="text" name="birthday" value="<?php echo $data->birthday; ?>"></label><br><br>
    Gender: <label><input type="text" name="gender" value="<?php echo $data->gender; ?>"></label><br><br>
    <input type="submit" value="Submit form">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>