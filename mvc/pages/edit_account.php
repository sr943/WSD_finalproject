
<?php 
include 'hf.html';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit your profile</title>
</head>
<body>
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

</body>
</html>  



