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
<div class="col-md-2"></div>
<div class="col-md-2" ></div>
<div class="col-md-2"><form action="index.php?page=accounts&action=logout" method="post">
    
    <div class="btn"><input style="border:0px solid transparent;background-color:grey;color:white;cursor:pointer;" type="submit" value="Logout"> </div>
    </form>
    </div></div>

<br/>

<div class="container">
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

   <div class="form-group">
    <label for="email">Ownermail:</label>
    <input type="email" class="form-control" style ="width:50%" name="mail" value="<?php echo $data->owneremail; ?>">
  </div>
   <div class="form-group">
    <label for="oid">Ownerid:</label>
    <input type="text" class="form-control" style ="width:50%" name="oid" value="<?php echo $data->ownerid; ?>">
  </div>
 <div class="form-group">
    <label for="createdate">CreatedDate:</label>
    <input type="date" class="form-control" style ="width:50%"name="createdate" value="<?php echo $data->createddate; ?>">
  </div>
 <div class="form-group">
    <label for="duedate">Due Date:</label>
    <input type="date" class="form-control" style ="width:50%" name="duedate" value="<?php echo $data->duedate; ?>">
  </div>
 <div class="form-group">
    <label for="message">Message:</label>
    <input type="text" class="form-control" style ="width:50%" name="message" value="<?php echo $data->message; ?>">
  </div>

 <div class="form-group">
    <label for="isdone">isDone:</label>
    <input type="number" class="form-control" style ="width:50%" name="isdone" value="<?php echo $data->isdone; ?>">
  </div>
   
   <div class="row">
				<div class="col-xs-6 col-sm-3"> <input type="submit" value="Update Form" class="btn btn-primary btn-block btn-md"> <Span class ="glyphicon glyphicon-edit"></span> </div>
        </form>
<div class="col-xs-6 col-sm-3"> 

  <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <input type="submit" form="form1" value="delete" class="btn btn-primary btn-block btn-md"
     style ="background-color:red;">Delete</input>
</form>
 </div>
     
        </div> 

    
    







</div>
<script src="js/scripts.js"></script>
</body>
</html>