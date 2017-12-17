<?php 
include 'hf.html';

?>

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

<?php
//this is how you print something  $data contains the record that was selected on the table.
print utility\htmlTable::generateTableFromOneRecord($data);
//print_r($data);
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

<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

    
    Ownermail: <label> <input type="email" name="mail" value="<?php echo $data->owneremail; ?>"></label><br><br>
    Ownerid: <label><input type="number" name="oid" value="<?php echo $data->ownerid; ?>"></label><br><br>
    Createddate: <label> <input type="text" name="createdate"  value="<?php echo $data->createddate; ?>"></label><br><br>
    Duedate: <label><input type="text" name="duedate" value="<?php echo $data->duedate; ?>"></label><br><br>
    Message: <label><input type="text" name="message" value="<?php echo $data->message; ?>"></label><br><br>
    isDone: <label><input type="number" name="isdone" value="<?php echo $data->isdone; ?>"></label><br><br>
    <input type="submit" value="Update Form">
</form>



<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form> 




<script src="js/scripts.js"></script>
</body>
</html>