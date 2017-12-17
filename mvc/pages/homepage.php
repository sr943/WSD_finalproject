
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>


<body background="bgimage.jpg" style = "background-repeat:no-repeat; background-size:cover;">

 <br>
<h1><center> <font color="White" ><u>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?></u></font></center> </h1>



<br>

    <div class="container">

<form class="form-horizontal" action="index.php?page=accounts&action=login" method="POST" >    
        
         <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Welcome!!</h2>
                    <hr>
                </div>
            </div>
           
        
        
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <label class="sr-only" for="email"><b>Username</b></label>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                 <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                  <input type="text" class="form-control" placeholder="Enter Username" name="email" required autofocus>
                </div>
           </div>
        </div>
        
        <br/>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
         
           <label class="sr-only" for="password"><b>Password</b></label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
            <input class="form-control" type="password"  placeholder="Enter Password" name="password" required>
            </div>
          </div>   
        </div>
                
        
        <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
            
            <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
            <a href="index.php?page=accounts&action=register" class="btn btn-link" >Not a member yet?</a>
       </div>
       </div>
        
  </form>
  </div>
  </div>


<script src="js/scripts.js"></script>
</body>
</html> 