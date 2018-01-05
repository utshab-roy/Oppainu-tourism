<?php
session_start();
$login_ad=0;
$user_session_ad ="";
$fileName="";
?>

    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin panel</title>

    <!-- Bootstrap -->
    
    <!-- date time picker -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
    
    
    
    <link rel="stylesheet" href="css/bootstrap-select.css">
   
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
     <script src="js/bootstrap-select.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
        $('.selectpicker').selectpicker();
    });
</script>
  </head>
  <body>
  <?php
	 $conn=mysqli_connect("localhost","root","","project370");
	 $sql1 = "select * from admin";
	$mysql = mysqli_query($conn,$sql1);



    if(isset($_REQUEST['submit'])){
		$name_local= $_POST['name'];
	    $pass_local = $_POST['pass'];
		$sql_2="select * from admin where name = '$name_local' and pass = '$pass_local'";
		$mysql_2 = mysqli_query($conn,$sql_2);	

if(mysqli_num_rows($mysql_2) == 1){
			$_SESSION['name_adm'] = $name_local;
			$_SESSION['password_adm'] = $pass_local;
			$user_session_ad = $_SESSION['name_adm'];
			$login_ad = 1;
		}
    	else{
		echo("incorrect name password");
			}
		
	}
	
if(isset($_SESSION['name_adm'])){
		$mysql_3 = mysqli_query($conn,"select * from admin where name = '".$_SESSION['name_adm']."' and pass = '".$_SESSION['password_adm']."'");
		if(mysqli_num_rows($mysql_3) == 1){
			$login_ad = 1;
			$user_session_ad = $_SESSION['name_adm'];
		}
		else 
			$login_ad = 0;
	}
	
	
		
	

	  if(isset($_REQUEST['submit_plc'])){
		$name_plc= $_POST['name_plc'];
	    $gen_plc_arr = $_POST['gen'];
		$gen_plc= implode(",",$gen_plc_arr);
		
		 $attractions_plc = $_POST['attractions_plc'];
	  $details_plc = $_POST['details_plc'];
	  $fileName = $_FILES['picture_plc']['name'];
		$temp_fileName = $_FILES['picture_plc']['tmp_name'];
		$target = 'upload/';
		move_uploaded_file($temp_fileName,$target.$fileName);		
		$sql_pls="Insert into place(name,genre,attractions,about,picture_plc) values('$name_plc','$gen_plc','$attractions_plc','$details_plc','$fileName')";
				mysqli_query($conn,$sql_pls);

		}
	
	 if(isset($_REQUEST['submit_htl'])){
		$name_htl= $_POST['name_htl'];
	    $address_htl = $_POST['address_htl'];
		 $phone_htl = $_POST['phone_htl'];
	 	 $type_htl = $_POST['type_htl'];
		 $cost_htl = $_POST['cost_htl'];
		 $email_htl = $_POST['email_htl'];
		 $placeid_htl = $_POST['placeid_htl'];
		echo('hola');	
		$sql_htl="Insert into hotel(name,address,phone,type,cost,email,place_ID) values('$name_htl','$address_htl','$phone_htl','$type_htl','$cost_htl','$email_htl','$placeid_htl')";
				if(mysqli_query($conn,$sql_htl))
				{
				
				}
				
				else{
				echo('jolola');}

		}
		
		 if(isset($_REQUEST['submit_tnp'])){
		$name_tnp= $_POST['name_tnp'];
	    $address_tnp = $_POST['address_tnp'];
		 $way_tnp = $_POST['way_tnp'];
	 	 $type_tnp = $_POST['type_tnp'];
		 $cost_tnp = $_POST['cost_tnp'];
		 $email_tnp = $_POST['email_tnp'];
		 $placeid_tnp = $_POST['placeid_tnp'];
		echo('hola');	
		$sql_htl="Insert into transport(name,address,way,type,cost,email,place_ID) values('$name_tnp','$address_tnp','$way_tnp','$type_tnp','$cost_tnp','$email_tnp','$placeid_tnp')";
				if(mysqli_query($conn,$sql_htl))
				{
				
				}
				
				else{
				echo('jolola');}

		}
		 if(isset($_REQUEST['submit_sdl'])){
	    $depdate_sdl = $_POST['depdate_sdl'];
		 $deptime_sdl = $_POST['deptime_sdl'];
	 	 $comment_sdl = $_POST['comment_sdl'];
		 $seat_sdl = $_POST['seat_sdl'];
		 $transportid_sdl = $_POST['transportid_sdl'];
		 $transportid_sdl = $_POST['transportid_sdl'];
		echo('hola');	
		$sql_htl="Insert into transport_schedule(departure_date,time,comment,seat_status,transport_ID) values('$depdate_sdl','$deptime_sdl','$comment_sdl','$seat_sdl','$transportid_sdl')";
				if(mysqli_query($conn,$sql_htl))
				{
					
				}
				
				else{
				echo('problem');}

		}
	
	
	
	
	
 ?>
    
  
  
  
  
  
  
  
  <?php if($login_ad == 0){?>
    <div class="wrapper">
    	  <div class="container">
          	<div class="page-header">
  				<h1>OPPAINU Admin login<small><p>Welcome <?php echo $user_session_ad;?></p></small></h1>
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
                        </div>
            <div class="page-header">
  				<h1><small>all rights are reserved by oppainu</small></h1>
			</div> 
             <?php } else {?>
<div class="container">
    	<div class="row">
        <div class="col-md-8">
			<div class="page-header">
  				<h1>OPPAINU Admin Panel <small><p>Welcome <?php echo $user_session_ad;?></p></small></h1>
			</div>
        	

       </div>
       </div>
 <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    
    <li role="presentation"><a href="#place" aria-controls="#place" role="tab" data-toggle="tab">add place</a></li>
    <li role="presentation"><a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">add hotel</a></li>
    <li role="presentation"><a href="#trans" aria-controls="#trans" role="tab" data-toggle="tab">add transport</a></li>
    <li role="presentation"><a href="#trans_sdl" aria-controls="trans_sdl" role="tab" data-toggle="tab">add transport schedule</a></li>

	<li><a href="logout.php">Logout</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
   
     <div role="tabpanel" class="tab-pane active" id="place">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                	<h2 class="heading"> available places </h2>
                    <table class="table table-hover table-bordered">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>genre</th>
                                
                            </tr>
                            <?php
                                 $sql_ns = "select place_id,name,genre from place";
                                 $mysql_ns = mysqli_query($conn,$sql_ns);
                                 while($res_ns = mysqli_fetch_assoc($mysql_ns)){
                            ?>
                                  <tr>
                                    <td><?php echo $res_ns['place_id'];?></td>
                                    <td><?php echo $res_ns['name'];?></td>
                                    <td><?php echo $res_ns['genre'];?></td>                              	   
                   				 </tr>
                                    
                                    
							<?php
                                }
                             ?>
                             
                           
                       </table>
                </div>
                <div class="col-md-5">
                	  
             					<h2 class="heading">add a place </h2>
                                  <form role="form" action="" method="post" enctype="multipart/form-data">
   									  <h2 class="form_label"><span class="label label-success">Name</span></h2>
                                      <input type="text" class="form-control"  name="name_plc" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">genre</span></h2>
                                       <label class="checkbox-inline"><input type="checkbox" name="gen[]" value="honeymoon">honeymoon</label>
                                       <label class="checkbox-inline"><input type="checkbox" name="gen[]" value="adventure">adventure</label>
                                       <label class="checkbox-inline"><input type="checkbox" name="gen[]" value="education">education</label>
                                       <label class="checkbox-inline"><input type="checkbox" name="gen[]" value="cultural">cultural</label>
                                       <label class="checkbox-inline"><input type="checkbox" name="gen[]" value="urban">urban</label>
                                       <label class="checkbox-inline"><input type="checkbox" name="gen[]" value="nature">nature</label>
                                      
                                       <h2 class="form_label"><span class="label label-success">attractions</span></h2>
                                      <input type="text" class="form-control"  name="attractions_plc" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">detail</span></h2>
                                      <textarea class="form-control"  name="details_plc" placeholder="Enter name"></textarea>
                                      <h2 class="form_label"><span class="label label-success">picture(tour related)</span></h2>
                                      <input type="file" name="picture_plc">
                                      <br><br>
                                      <input type="submit" class="btn-success" value="submit" name="submit_plc">
                                      <br><br><br><br>
                                   </form>
                             
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div>
     <div role="tabpanel" class="tab-pane" id="hotel">
    	 <div class="container">
        	<div class="row">
         <div class="col-md-8">
                	  
             					<h2 class="heading">add a hotel </h2>
                                  <form role="form" action="" method="post" enctype="multipart/form-data">
   									  <h2 class="form_label"><span class="label label-success">Name</span></h2>
                                      <input type="text" class="form-control"  name="name_htl" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">address</span></h2>
                                       <input type="text" class="form-control"  name="address_htl" placeholder="Enter name">
                                       <h2 class="form_label"><span class="label label-success">phone</span></h2>
                                      <input type="text" class="form-control"  name="phone_htl" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">type</span></h2>
                                      <div class="checkbox">
                                          <label><input type="radio" name="type_htl" value="single">single</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input type="radio" name="type_htl" value="double">double</label>
                                        </div>
                                        <div class="checkbox">
                                          <label><input type="radio" name="type_htl" value="triple" disabled>triple</label>
                                        </div>
                                      <h2 class="form_label"><span class="label label-success">cost</span></h2>
                                      <input type="text" class="form-control"  name="cost_htl" placeholder="Enter name">
                                       <h2 class="form_label"><span class="label label-success">email</span></h2>
                                      <input type="text" class="form-control"  name="email_htl" placeholder="Enter name">
                                       <h2 class="form_label"><span class="label label-success">place</span></h2>
                            
										<select class="selectpicker" id="searchType" name="placeid_htl">
                                           
                                            <?php
                                 $sql_ns = "select place_id,name from place";
                                 $mysql_ns = mysqli_query($conn,$sql_ns);
                                 while($res_ns = mysqli_fetch_assoc($mysql_ns)){
                            ?>
                                  <option data-subtext="<?php echo $res_ns['name'];?>"><?php echo $res_ns['place_id'];?></option>
   
							<?php
                                }
                             ?>
                                           
                                         </select>
							
                                      
                                      <br><br>
                                      <input type="submit" class="btn-success" value="submit" name="submit_htl">
                                      </form>
                                      <br><br><br><br>
                                   
                             
                </div>
               </div>
              </div>  
                
    </div>
     <div role="tabpanel" class="tab-pane" id="trans">
     <div class="container">
        	<div class="row">
    			<div class="col-md-8">
                	  
             					<h2 class="heading">add a transport </h2>
                                  <form role="form" action="" method="post" enctype="multipart/form-data">
   									  <h2 class="form_label"><span class="label label-success">Name</span></h2>
                                      <input type="text" class="form-control"  name="name_tnp" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">address</span></h2>
                                       <input type="text" class="form-control"  name="address_tnp" placeholder="Enter name">
                                       <h2 class="form_label"><span class="label label-success">way</span></h2>
                                      <input type="text" class="form-control"  name="way_tnp" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">type</span></h2>
                                      <div class="checkbox">
                                          <label><input type="radio" name="type_tnp" value="air">air</label>
                                        </div>
                                       <div class="checkbox">
                                          <label><input type="radio" name="type_tnp" value="bus-Ac">bus-Ac</label>
                                          
                                          <label><input type="radio" name="type_tnp" value="bus-NonAc">bus-NonAc</label>
                                          
                                          <label><input type="radio" name="type_tnp" value="motorboat">motorboat</label>
                                        
                                        
                                          <label><input type="radio" name="type_tnp" value="cruise" >cruise</label>
                                        </div>
                                      <h2 class="form_label"><span class="label label-success">cost</span></h2>
                                      <input type="text" class="form-control"  name="cost_tnp" placeholder="Enter name">
                                       <h2 class="form_label"><span class="label label-success">email</span></h2>
                                      <input type="text" class="form-control"  name="email_tnp" placeholder="Enter name">
                                       <h2 class="form_label"><span class="label label-success">place</span></h2>
                            
										<select class="selectpicker" id="searchType" name="placeid_tnp">
                                           
                                            <?php
                                 $sql_ns = "select place_id,name from place";
                                 $mysql_ns = mysqli_query($conn,$sql_ns);
                                 while($res_ns = mysqli_fetch_assoc($mysql_ns)){
                            ?>
                                  <option data-subtext="<?php echo $res_ns['name'];?>"><?php echo $res_ns['place_id'];?></option>
   
							<?php
                                }
                             ?>
                                           
                                         </select>
							
                                      
                                      <br><br>
                                      <input type="submit" class="btn-success" value="submit" name="submit_tnp">
                                      </form>
                                      <br><br><br><br>
                                   
                          
                </div>
               </div>
               </div>
                
    </div>
     <div role="tabpanel" class="tab-pane" id="trans_sdl">
    	 <div class="container">
        	<div class="row">
    			<div class="col-md-8">
                	  
             					<h2 class="heading">add transport schedule</h2>
                                  <form role="form" action="" method="post" enctype="multipart/form-data">
   									  <h2 class="form_label"><span class="label label-success">select departure date</span></h2>
                                       <div id="datetimepicker" class="input-append date">
                                     	 <input type="text" name="depdate_sdl"></input>
                                     	  <span class="add-on">
                                        	<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                      		</span>
                                    	</div>
                                      
                                       <h2 class="form_label"><span class="label label-success">select time</span></h2>
                                       <div id="datetimepicker2" class="input-append time">
                                     	 <input data-format="hh:mm" name="deptime_sdl" type="text"></input>
                                            <span class="add-on">
                                              <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                                              </i>
                                            </span>
                                    	</div>
                                       <h2 class="form_label"><span class="label label-success">important comments</span></h2>
                                      <input type="text" class="form-control"  name="comment_sdl" placeholder="Enter name">
                                      
                                       <h2 class="form_label"><span class="label label-success">select available seats</span></h2>
                                      <input type="text" class="form-control"  name="seat_sdl" placeholder="Enter name">
                                      <h2 class="form_label"><span class="label label-success">transport</span></h2>
                                      <select class="selectpicker" id="searchType" name="transportid_sdl">
                                           
                                            <?php
                                 $sql_ns = "select transport_id,name from transport";
                                 $mysql_ns = mysqli_query($conn,$sql_ns);
                                 while($res_ns = mysqli_fetch_assoc($mysql_ns)){
                           					 ?>
                                  <option data-subtext="<?php echo $res_ns['name'];?>"><?php echo $res_ns['transport_id'];?></option>
   
											<?php
                                                }
                                             ?>
                                           
                                         </select>
							
                                      
                                      <br><br>
                                      <input type="submit" class="btn-success" value="submit" name="submit_sdl">
                                      </form>
                                      <br><br><br><br>
                                
                </div>
              </div>
            </div>
    </div>
     

  </div>

</div>		
            
            
            
            
            
     <?php }?>                    
	</div>
    </div>






 

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
	  
	  $('#datetimepicker2').datetimepicker({
        pickDate: false
      });
    </script>

  </body>
</html>