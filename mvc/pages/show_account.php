
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
<div class="row" style="text-align:right;background-color:grey;font-color:white;">
<div class="col-md-6"></div>
<div class="col-md-2"style="  padding-top:  8px;"><a href="index.php?page=accounts&action=myProfile" style="color:white;">My Profile</a></div>
<div class="col-md-2" style=" padding-top:  8px;"><a href="index.php?page=accounts&action=editProfile" style="color:white;">Edit Profile</a></div>
<div class="col-md-2"><form action="index.php?page=accounts&action=logout" method="post">
    
    <div class="btn"><input style="border:0px solid transparent;background-color:grey;color:white;cursor:pointer;" type="submit" >Logout</input> </div>
    </form></div>


</div>

</br>
<h3  style="text-align: center;">Here are your details</h3>


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

<!--<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

 <div class="form-group">
    <label for="fname">First Name:</label>
    <input type="text" class="form-control" style ="width:50%" name="fname" value="<?php echo $data->fname; ?>">
  </div>
  
   <div class="form-group">
    <label for="lname">Last Name:</label>
    <input type="text" class="form-control" style ="width:50%" name="lname" value="<?php echo $data->lname; ?>">
  </div>
  
   <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" style ="width:50%" name="email" value="<?php echo $data->email; ?>">
  </div>
  
   <div class="form-group">
    <label for="phone">Phone :</label>
    <input type="number" class="form-control" style ="width:50%" name="phone" value="<?php echo $data->phone; ?>">
  </div>

   <div class="form-group">
    <label for="Birthday">Birthday:</label>
    <input type="date" class="form-control" style ="width:50%" name="birthday" value="<?php echo $data->birthday; ?>">
  </div>

   <div class="form-group">
    <label for="gender">Gender:</label>
    <input type="text" class="form-control" style ="width:50%" name="gender" value="<?php echo $data->gender; ?>">
  </div>


<div class="row">
				<div class="col-xs-6 col-sm-3"> <input type="submit" value="Update Form" class="btn btn-primary btn-block btn-md"> <Span class ="glyphicon glyphicon-edit"></span> </div>
</form>
<div class="col-xs-6 col-sm-3"> 

  <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete" class="btn btn-primary btn-block btn-md"
     style ="background-color:red;">Delete</button>
</form>
 </div>
     
        </div> -->






</div>
<script src="js/scripts.js"></script>
</body>
</html>