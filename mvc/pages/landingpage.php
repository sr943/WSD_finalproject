
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<style>
label{
width: 5em;
float: right;
text-align: left;
margin-right: 65.0em;
display: block;
}
</style>
<br>
<form action="index.php?page=tasks&action=insertTask" method="post">

    
    Ownermail: <label> <input type="email" name="mail" ></label><br><br>
    Ownerid: <label><input type="number" name="oid" ></label><br><br>
    Createddate: <label> <input type="text" name="createdate" ></label><br><br>
    Duedate: <label><input type="text" name="duedate" ></label><br><br>
    Message: <label><input type="text" name="message" ></label><br><br>
    isDone: <label><input type="number" name="isdone" ></label><br><br>
    <input type="submit" value="Insert">
</form>

</body>
</html>

