
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

<body background="alltask.jpg" style = "background-repeat:no-repeat; background-size:cover;">
<div class="row" style="text-align:right;background-color:grey;font-color:white;">
<div class="col-md-6"></div>
<div class="col-md-2"style="  padding-top:  8px;"><a href="index.php?page=accounts&action=myProfile" style="color:white;">My Profile</a></div>
<div class="col-md-2" style=" padding-top:  8px;"><a href="index.php?page=accounts&action=editProfile" style="color:white;">Edit Profile</a></div>
<div class="col-md-2"><form action="index.php?page=accounts&action=logout" method="post">
    
    <div class="btn"><input style="border:0px solid transparent;background-color:grey;color:white;cursor:pointer;" type="submit" value="Logout"> </div>
    </form></div>


</div>
<h3>Welcome <?php echo $data->fname;?></h3>
</br>
<h3  style="text-align: center;">Here are your details</h3>

</br>
<div class="container">
<div class="row">
<?php
//this is how you print something  $data contains the record that was selected on the table.

print utility\htmlTable::generateTableFromOneRecord($data);

?>
</div>
<style>
label{
width: 5em;
float: right;
text-align: left;
margin-right: 68.0em;
display: block;
}
</style>








</div>
<script src="js/scripts.js"></script>
</body>
</html>