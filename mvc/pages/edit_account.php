

<!DOCTYPE html>
<html>
<head>
    <title>Edit your profile</title>
</head>
<body>

<div class="row" style="text-align:right;background-color:grey;font-color:white;">
<div class="col-md-6"></div>
<div class="col-md-2"style="  padding-top:  8px;"><a href="index.php?page=accounts&action=myProfile" style="color:white;">My Profile</a></div>

<div class="col-md-2"><form action="index.php?page=accounts&action=logout" method="post">
    
    <div class="btn"><input style="border:0px solid transparent;background-color:grey;color:white;cursor:pointer;" type="submit" >Logout</input> </div>
    </form></div>


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
<div class="container">
  <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="POST">
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
		  <div class="col-xs-6 col-sm-3"> <input type="submit" value="Update Form" class="btn btn-primary btn-block btn-md"> 
        <span class ="glyphicon glyphicon-edit"></span> 
      </div>
    </div> 
</form>
</br>
<!--<div class="col-xs-6 col-sm-3">
  <form action="index.php?page=accounts&action=delete" method="post" id="form1">
    <input type="submit" form="form1" value="Delete" class="btn btn-primary btn-block btn-md"
     style ="background-color:red;" />
  </form>
</div> -->
<div class="col-xs-6 col-sm-3">
<a href="index.php?page=accounts&action=delete" class="btn btn-primary btn-block btn-md" style ="background-color:red;" >Delete</a>
    </div> 
</div> 



</body>
</html>  



