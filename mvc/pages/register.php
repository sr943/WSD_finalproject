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


<style>
label{
width: 5em;
float: right;
text-align: left;
margin-right: 68.0em;
display: block;
}

.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
<div class= "container">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

      <form role="form" action="index.php?page=accounts&action=register" method="post">
      <h2>Register!!! <small>Please sign up.</small></h2>
      <hr class="colorgraph">
          <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
            <input type="text" name="fname"  class="form-control input-lg" placeholder="First Name" tabindex="1" required>
					</div>
				</div>
        <div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="lname" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
					</div>
				</div>
			</div> 
      <div class="form-group">
				<input type="text" name="phone" class="form-control input-lg" placeholder="Phone Number" tabindex="3" maxlength="10" required>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
			</div>
      	<div class="form-group">
				<input type="password" name="password" id="email" class="form-control input-lg" placeholder="Password" tabindex="4" required>
			</div>
       <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="date" name="birthday"  class="form-control input-lg" placeholder="Birthday" tabindex="5" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="gender"  class="form-control input-lg" placeholder="Gender" tabindex="6" required>
					</div>
				</div>
			</div>
    <hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-12"> <input type="submit" value="Submit form" class="btn btn-primary btn-block btn-lg" tabindex="7"> </div>
        </div>
</form>
</div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>
