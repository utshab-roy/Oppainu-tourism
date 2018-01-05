<?php
session_start();
$login_usr=0;
$user_session_usr ="";
$fileName="";
$conn=mysqli_connect("localhost","root","","project370");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OPPAINU Tourism</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
      <link href="css/reset.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!------------------------------------------------------------------------------------- BANNER started -->
  <div class="container banner_top">
  <!------------------------------------------------------------------------------------- NAV started ----->
  	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">OPPAINU</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!------------------------------------------------------------------------------------- NAV FINISHED -->
	<div class="container">
    	<div class="row">
        <div class="col-md-4">
        </div>
        	<div class="col-md-4">
            <div id="title">
                <h1>OPPAINU Tourism</h1>
                <p>your very own magic carpet ...</p>
            </div>
            </div>
         <div class="col-md-4">
        </div>
        </div>
	</div>
</div>
<!------------------------------------------------------------------------------------- BANNER FINISHED -->

<div class="container">
    	<div class="row">
        
        <div class="page-header">
  			<h1 style="text-align:center;">we provide all kinds of tour <small>make a choice  </small></h1>
		</div>
        	<div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                  <a href=""><img src="images/education1.jpg" alt="..."></a>
                  <div class="caption">
                    <h3>educational</h3>
                    <p>tours</p>
                    <p><a href="genre.php?id=education" class="btn btn-primary" role="button">proceed</a></p>
                  </div>
                </div>
              </div>
              
               <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                   <a href=""><img src="images/adventure1.jpg" alt="..."></a>
                  <div class="caption">
                    <h3>adventure</h3>
                    <p>tours</p>
                    <p><a href="genre.php?id=adventure" class="btn btn-primary" role="button">proceed</a></p>
                  </div>
                </div>
              </div>
              
              
                <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                   <a href=""><img src="images/honeymoon1.jpg" alt="..."></a>
                  <div class="caption">
                    <h3>honeymoon</h3>
                    <p>tours</p>
                    <p><a href="genre.php?id=honeymoon" class="btn btn-primary" role="button">proceed</a></p>
                  </div>
                </div>
              </div>
              
              
               
              
                <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                  <a href=""> <img src="images/nature1.jpg" alt="..."></a>
                  <div class="caption">
                    <h3>nature</h3>
                    <p>tours</p>
                    <p><a href="genre.php?id=nature" class="btn btn-primary" role="button">proceed</a></p>
                  </div>
                </div>
              </div>
              
                <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                  <a href=""> <img src="images/culture1.jpg" alt="..."></a>
                  <div class="caption">
                    <h3>cultural</h3>
                    <p>tours</p>
                    <p><a href="cultural" class="btn btn-primary" role="button">proceed</a></p>
                  </div>
                </div>
              </div>
              
                <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                  <a href=""> <img src="images/urban1.jpg" alt="..."></a>
                  <div class="caption">
                    <h3>urban</h3>
                    <p>tours</p>
                    <p><a href="genre.php?id=urban" class="btn btn-primary" role="button">proceed</a></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
</div>
<!------------------------------------------------------------------------------------- places FINISHED --> 
<div class="container">
    	<div class="row">
        
        <div class="page-header">
  			<h1 style="text-align:center;">we provide all kinds of tour <small>make a choice  </small></h1>
		</div>
        	<div class="row">
            <?php
			 $sql_ncp = "select ncp.picture_ncp,ncp.headline,ncp.place,ncp.departure_date,ncp.end_date,ncp.about,company.name,company.email from ncp,company where company.company_id=ncp.company_id";
			 $mysql_ncp = mysqli_query($conn,$sql_ncp);
			 while($res_ncp = mysqli_fetch_assoc($mysql_ncp)){
            ?>
              <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                  <a href=""><img src="addvertiser/upload/<?php echo $res_ncp['picture_ncp'];?>" alt="..."></a>
                  <div class="caption">
                    <h3><?php echo $res_ncp['headline'];?></h3>
                    <p> places :<?php echo $res_ncp['place'];?></p>
                    <p>starts :<span style="color:#990000;"><?php echo $res_ncp['departure_date'];?></span> ends :<span style="color:#990000;"><?php echo $res_ncp['end_date'];?></span></p>
                    <br>
                    <p><?php echo $res_ncp['about'];?></p>
                    <br>
                     <p style="color:#0066CC;font-size:20px;"><span style="color:#990000">organized by : </span><?php echo $res_ncp['name'];?></p>
                    <p><a href="#" class="btn btn-primary" role="button">Book</a></p>
                  </div>
                </div>
              </div>
              <?php
              }
			  ?>
             </div> 
              
          </div>
</div>


                     
  </body>
</html>