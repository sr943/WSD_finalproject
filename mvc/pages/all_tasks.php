
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

<br/>
<h2 style="text-align:center; text-family:arial;"> Add Your Tasks </h2>


<div class="container">
<br/>

<div class="row">
<?php
//this is how you print something
 if(!empty($data))
print utility\htmlTable::genarateTableFromMultiArray($data);


?>
</div>

<style>
a{

}
label{
width: 5em;
float: right;
text-align: left;
margin-right: 65.0em;
display: block;
}
</style>
<br>

<form role="form" action="index.php?page=tasks&action=insertTask"  style="border: 1px;"method="post">
 
 <div class="form-group">
    <label for="email">Ownermail:</label>
    <input type="email" class="form-control" style ="width:50%" name="mail" required>
  </div>
   <div class="form-group">
    <label for="oid">Ownerid:</label>
    <input type="text" class="form-control" style ="width:50%" name="oid" required>
  </div>
 <div class="form-group">
    <label for="createdate">CreatedDate:</label>
    <input type="date" class="form-control" style ="width:50%"name="createdate" required>
  </div>
 <div class="form-group">
    <label for="duedate">Due Date:</label>
    <input type="date" class="form-control" style ="width:50%" name="duedate" required>
  </div>
 <div class="form-group">
    <label for="message">Message:</label>
    <input type="text" class="form-control" style ="width:50%" name="message" required>
  </div>

 <div class="form-group">
    <label for="isdone">isDone:</label>
    <input type="number" class="form-control" style ="width:50%" name="isdone" required>
  </div>
   
   <div class="row">
				<div class="col-xs-3 col-sm-3"> <input type="submit" value="Insert" class="btn btn-primary btn-block btn-md" tabindex="7"> </div>
        </div>
</form>

</div>
<script src="js/scripts.js"></script>
</body>
</html>