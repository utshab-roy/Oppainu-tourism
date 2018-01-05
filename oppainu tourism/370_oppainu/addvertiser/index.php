<?php
session_start();
$login_ad=0;
$user_session_ad ="";
$user_session_id="";
$fileName="";
?>

    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>advertiser panel</title>
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
      <link href="css/reset.css" rel="stylesheet">
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
  <?php
	 $conn=mysqli_connect("localhost","root","","project370");
	 $sql1 = "select * from company";
	$mysql = mysqli_query($conn,$sql1);



    if(isset($_REQUEST['submit'])){
		$name_local= $_POST['name'];
	    $pass_local = $_POST['pass'];
		$sql_2="select * from company where name = '$name_local' and pass = '$pass_local'";
		
		$mysql_2 = mysqli_query($conn,$sql_2);	

if(mysqli_num_rows($mysql_2) == 1){
			$_SESSION['name_adv'] = $name_local;
			$_SESSION['password_adv'] = $pass_local;
			$user_session_ad = $_SESSION['name_adv'];
			$login_ad = 1;
			
			while($res= mysqli_fetch_assoc($mysql_2)){
				$user_session_id = $res['company_id'];
				echo $res['company_id']; 
			}
			
		}
    	else{
		echo("incorrect name password");
			}
	}
		
if(isset($_SESSION['name_adv'])){
		$mysql_3 = mysqli_query($conn,"select * from company where name = '".$_SESSION['name_adv']."' and pass = '".$_SESSION['password_adv']."'");
		if(mysqli_num_rows($mysql_3) == 1){
			$login_ad = 1;
			$user_session_ad = $_SESSION['name_adv'];
			while($res= mysqli_fetch_assoc($mysql_3)){
				$user_session_id = $res['company_id'];
				echo $user_session_id;
			}
			
		}
		else 
			$login_ad = 0;
	}
	
	
	
	
	
	
	if(isset($_REQUEST['submit_signup'])){
		$name_local= $_POST['name_signup'];
	    $pass_local = $_POST['pass_signup'];
		$repn_signup = $_POST['repn_signup'];
		$repd_signup = $_POST['repd_signup'];
		$email_signup = $_POST['email_signup'];
		
				$sql = "insert into company(name,pass,representative_name,designation,email) values ('$name_local','$pass_local','$repn_signup','$repd_signup','$email_signup')";
				if(mysqli_query($conn,$sql))
{

				echo('successfully inserted');
				$_SESSION['name_adv'] = $name_local;
				$_SESSION['password_adv'] = $pass_local;
				$user_session_ad = $_SESSION['name_adv'];
				$login_ad = 1;
}
	}
	
	
	
	
	if(isset($_REQUEST['submit_create'])){
		$title_create = $_POST['title_create'];
	    $place_create  = $_POST['place_create'];
		$depdate_create  = $_POST['depdate_create'];
		$enddate_create  = $_POST['enddate_create'];
		$cost_create = $_POST['cost_create'];
		$deptime_create  = $_POST['deptime_create'];
		$detail_create  = $_POST['detail_create'];
		$fileName = $_FILES['picture_create']['name'];
		$temp_fileName = $_FILES['picture_create']['tmp_name'];
		$target = 'upload/';
		move_uploaded_file($temp_fileName,$target.$fileName);
		
				$sql = "insert into ncp(headline,place,departure_date,end_date,cost,time,about,picture_ncp,company_id) values ('$title_create','$place_create','$depdate_create
				','$enddate_create','$cost_create','$deptime_create','$detail_create','$fileName','$user_session_id')";
				if(mysqli_query($conn,$sql))
{

				echo('successfully inserted');
				
}
	}
	
 ?>
    
  
  
  
  
  
  
  
  <?php if($login_ad == 0){?>
    <div class="wrapper">
    	  <div class="container">
          	<div class="page-header">
  				<h1>OPPAINU Advertiser login<small><p>Welcome <?php echo $user_session_ad;?></p></small></h1>
			</div>
                 		<div class="row">
                        	<div class="col-md-1">
                            </div>
        			  		<div class="col-md-5">
             					<h2 class="heading">Enter Valid Information To Login </h2>
                                  <form role="form" action="" method="post">
   
                                     <h2 class="form_label"><span class="label label-success">Name</span></h2>
                                      <input type="text" class="form-control"  name="name" placeholder="Enter name">
                                      
                                      
                                     <h2 class="form_label"><span class="label label-success">Password</span></h2>
                                      <input type="password" class="form-control"  name="pass" placeholder="Enter password">

										<br><br>
                                        <input type="submit" class="btn-success" value="submit" name="submit">
                                      
                                    	
                                   
                                  </form>
                             </div>
                             
                             <div class="col-md-3">
             					<h2 class="heading">sign up </h2>
                                  <form role="form" action="" method="post">
   
                                     <h2 class="form_label"><span class="label label-success">Name</span></h2>
                                      <input type="text" class="form-control"  name="name_signup" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">Name Of Representative</span></h2>
                                      <input type="text" class="form-control"  name="repn_signup" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">Representative Designation</span></h2>
                                      <input type="text" class="form-control"  name="repd_signup" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">Email</span></h2>
                                      <input type="text" class="form-control"  name="email_signup" placeholder="Enter name">
                                      
                                      
                                     <h2 class="form_label"><span class="label label-success">Password</span></h2>
                                      <input type="password" class="form-control"  name="pass_signup" placeholder="Enter password">

										<br><br>
                                        <input type="submit" class="btn-success" value="submit" name="submit_signup">
                                      
                                    	
                                   
                                  </form>
                             </div>
                             
                        </div>
            <div class="page-header">
  				<h1><small>all rights are reserved by oppainu</small></h1>
			</div> 
             <?php } else {?>
<div class="container">
    	<div class="row">
        <div class="col-md-8">
			<div class="page-header">
  				<h1>OPPAINU Advertiser Panel <small><p>Welcome <?php echo $user_session_ad;?></p></small></h1>
			</div>
        	

       </div>
       </div>
 <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#create" aria-controls="#create" role="tab" data-toggle="tab">create an add</a></li>
    <li role="presentation"><a href="#view" aria-controls="#view" role="tab" data-toggle="tab">view existing adds</a></li>
   
	<li><a href="logout.php">Logout</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="create">
    	 <div class="container">
         	<div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                	<h2 class="heading"> make a new package </h2>
                                  <form role="form" action="" method="post" enctype="multipart/form-data">
   
                                     <h2 class="form_label"><span class="label label-success">package title</span></h2>
                                     <input type="text" class="form-control"  name="title_create" placeholder="Enter name">
                                      
                                     <h2 class="form_label"><span class="label label-success">place</span></h2>
                                     <input type="text" class="form-control"  name="place_create" placeholder="Enter name">
                                      
                                     <h2 class="form_label"><span class="label label-success">departure date</span></h2>
                                     <div id="datetimepicker" class="input-append date">
                                      <input type="text" name="depdate_create"></input>
                                      <span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                      </span>
                                    </div>
                                      
                                     <h2 class="form_label"><span class="label label-success">tour end date</span></h2>
                                     <div id="datetimepicker1" class="input-append date">
                                      <input type="text" name="enddate_create"></input>
                                      <span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                      </span>
                                    </div>
                                      
                                       <h2 class="form_label"><span class="label label-success">tour cost (total)</span></h2>
                                     <input type="text" class="form-control"  name="cost_create" placeholder="Enter name">
                                     
                                      <h2 class="form_label"><span class="label label-success">departure time</span></h2>
                                     <input type="text" class="form-control"  name="deptime_create" placeholder="Enter name">
                                     
                                      <h2 class="form_label"><span class="label label-success">tour detail</span></h2>
                                     <textarea  name="detail_create" placeholder="Enter name"></textarea>
                                     
                                      <h2 class="form_label"><span class="label label-success">picture (tour related)</span></h2>
                                      <input type="file" name="picture_create">

									 <br><br>
                                     <input type="submit" class="btn-success" value="submit" name="submit_create">
                                       <br><br> <br><br>
                                  </form>
                </div>
                <div class="col-md-1">
                </div>
         	</div>
         </div>
    </div>
    
    <div role="tabpanel" class="tab-pane" id="view">
    	<div class="container">
         	<div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                	<h2 class="heading">all packages posted by <?php echo $user_session_ad;?></h2>
                       <table class="table table-hover table-bordered">
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>place</th>
                               
                            </tr>
                            <?php
                                 $sql_ns = "select * from ncp where company_id = '$user_session_id'";
                                 $mysql_ns = mysqli_query($conn,$sql_ns);
                                 while($res_ns = mysqli_fetch_assoc($mysql_ns)){
                            ?>
                                  <tr>
                                    <td><?php echo $res_ns['ncp_id'];?></td>
                                    <td><?php echo $res_ns['headline'];?></td>
                                    <td><?php echo $res_ns['place'];?></td>                              	   
                                  	
                   				 </tr>
                                    
                                    
							<?php
                                }
                             ?>
                       </table>
                                 
                </div>
                <div class="col-md-1">
                </div>
         	</div>
         </div>
    </div>
    
    

  </div>

</div>		
            
            
            
            
            
     <?php }?>                    
	</div>
    </div>

  </body>
</html>

<script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'yyyy/MM/dd',
        language: 'en'
      });
	  
	  $('#datetimepicker1').datetimepicker({
        format: 'yyyy/MM/dd',
        language: 'en'
      });
    </script>