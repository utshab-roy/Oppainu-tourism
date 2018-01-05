<?php
session_start();
$login_usr=0;
$user_session_usr ="";
$fileName="";
$conn=mysqli_connect("localhost","root","","project370");
$date_='not_selected';
$room_='not_selected';



?>
 <?php

		  if(isset($_REQUEST['submit_cart']))
			{
				$a= $_REQUEST['name_us'];
				$b= $_REQUEST['email_us'];
				$sq3 = "Insert into user(name,email) values('$a','$b')";
				mysqli_query($conn,$sq3);
				
				
			 	 $sql_c5="INSERT INTO cart2(hotel_id,place_id)
  				SELECT htl_temp.htl_id,htl_temp.place_id FROM htl_temp";
			 	$mysql_c5 = mysqli_query($conn,$sql_c5);
			 
			}
											
		if(isset($_REQUEST['id']))
		{
			$selected= $_REQUEST['id'];
			
		}
		if(isset($_REQUEST['id']) && isset($_REQUEST['date'])&& isset($_REQUEST['seats'])&& isset($_REQUEST['tns_id'])&& isset($_REQUEST['tns_sdl_id']))
		{
			$a= $_REQUEST['id'];
			$b= $_REQUEST['date'];
			$c= $_REQUEST['seats'];
			$d= $_REQUEST['tns_id'];
			$e= $_REQUEST['tns_sdl_id'];
			 
			 
			$sql = "DELETE FROM tns_temp";
			mysqli_query($conn,$sql);
			$sq2 = "Insert into tns_temp(tns_id,tns_sdl_id,date,seats) values('$d','$e','$b','$c')";
			mysqli_query($conn,$sq2);
		}
		if(isset($_REQUEST['id']) && isset($_REQUEST['rooms'])&& isset($_REQUEST['hotel_id']))
		{
			$a= $_REQUEST['id'];
			$b= $_REQUEST['rooms'];
			$c= $_REQUEST['hotel_id'];
			
			 
			 
			$sql = "DELETE FROM htl_temp";
			mysqli_query($conn,$sql);
			$sq2 = "Insert into htl_temp(htl_id,rooms,place_id) values('$c','$b','$a')";
			mysqli_query($conn,$sq2);
		}
	$sql = "select * from place where place_id=$selected";
			$data = mysqli_query($conn,$sql);
			 $res_data = mysqli_fetch_assoc($data);
			 $place=$res_data['place_id'];
			 
  ?>

 <?php
   if(isset($_REQUEST['submit_transport'])){
  	echo $ids[1];
   }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
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
      <a class="navbar-brand" href="index.php">OPPAINU</a>
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
<!------------------------------------------------------------------------------------- nav FINISHED -->        
<div class="container">
    	<div class="row">
        
        <div class="page-header">
  			<h1 style="text-align:center;"><?php echo $res_data['name'];?> <small> is waiting for your footstep  </small></h1>
		</div>
        	<div class="row">
           		<div class="col-md-4">
                	<div class="thumbnail">
                      <a href=""><img style="height:300px;width:500px;" src="admin/upload/<?php echo $res_data['picture_plc'];?>" alt="..."></a>
                      <div class="caption"><h3><?php echo $res_data['name'];?></h3></div>
                  	</div>
                </div>
                <div class="col-md-8">
                	 <div role="tabpanel">
                        
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist" id="myTab">
                            <li role="presentation"  class="active"><a href="#transport" aria-controls="#transport" role="tab" data-toggle="tab">select transport</a></li>
                            <li role="presentation"><a href="#hotel" aria-controls="#hotel" role="tab" data-toggle="tab">select hotel</a></li> 
                            <li role="presentation"><a href="#cart" aria-controls="#cart" role="tab" data-toggle="tab">my cart</a></li>
                          </ul>
                        
                          <!-- Tab panes -->
                              <div class="tab-content">
                                  <div role="tabpanel" class="tab-pane" id="hotel">
                                  	<h2 class="heading">availanle hotels in <?php echo $res_data['name'];?></h2>
                                   	<form role="form" action="" method="post" enctype="multipart/form-data"> 
                                     <input type="text" class="form-control"  name="rooms" placeholder="number of rooms">
                                     <input type="submit" class="btn-success" value="submit" name="submit_rooms">
                                     <?php if(isset($_REQUEST['submit_rooms'])){
                                     	 $room_ = $_POST['rooms'];
										 
                                     }?>
                                     
                                    <?php if($room_=='not_selected'){?>
									
									<?php }else{?>
                                   
                                  	
                                   
                                            <table class="table table-hover table-bordered">
                                                <tr>
                                                    <th>name</th>
                                                    <th>address</th>
                                                    <th>type</th>
                                                    <th>phone</th>
                                                    <th>cost</th>
                                                    <th>add to cart</th>
                                                </tr>
                                           
                                            <?php
												 $sql_htl = "select * from hotel where place_ID='$place'";
												 $mysql_htl = mysqli_query($conn,$sql_htl);
												 while($res_htl = mysqli_fetch_assoc($mysql_htl)){
											?>
													  <tr>
                                                        <td><?php echo $res_htl['name'];?></td>
                                                        <td><?php echo $res_htl['address'];?></td>
                                                        <td><?php echo $res_htl['type'];?></td>
                                                        <td><?php echo $res_htl['phone'];?></td>
                                                        <td><?php echo $res_htl['cost'];?></td>
                                                                                     	   
                                                        <td><a href="custom.php?id=<?php echo $selected?>&rooms=<?php echo $room_?>&hotel_id=<?php echo  $res_htl['hotel_id'];?>" class="remove"><button class="btn-danger btn-sm btn" name="submit_hotel" type="button">add to cart</button></a></td>
                                                     </tr>
	   
											<?php
                                                }
                                             ?>
                                           </table>
                                         
                                  	</form>
                                    <?php
                                                }
                                             ?>
                                    
                                  </div>
                                  <div role="tabpanel" class="tab-pane active" id="transport">
                                  	<h2 class="heading">availanle hotels in <?php echo $res_data['name'];?></h2>
                                  	<form role="form" action="" method="post" enctype="multipart/form-data">
                                    <h2 class="form_label"><span class="label label-success">select date</span></h2>
                                     <div id="datetimepicker" class="input-append date">
                                     	 <input type="text" name="date"></input>
                                      	<span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control"  name="quantity" placeholder="number of seats">
                                     <input type="submit" class="btn-success" value="submit" name="submit_date">
                                     <?php if(isset($_REQUEST['submit_date'])){
                                     	 $date_ = $_POST['date'];
										 $quantity=$_POST['quantity'];
                                     }?>
                                     
                                    <?php if($date_=='not_selected'){?>
									
									<?php }else{?>
                                    <?php echo $date_; ?>
                                   
                                            <table class="table table-hover table-bordered">
                                                <tr>
                                                    <th>name</th>
                                                    <th>way</th>
                                                    <th>type</th>
                                                    <th>date</th>
                                                    <th>time</th>
                                                    <th>available seats</th>
                                                    <th>cost (per seat)</th>
                                                   
                                                    <th>add to cart</th>
                                                </tr>
                                           
                                            <?php
												 
												 $sql_tns = "select * from transport,transport_schedule where transport.place_ID='$place' and transport_schedule.transport_id=transport.transport_id
												 and transport_schedule.departure_date='$date_'";
												  ;
												 $mysql_tns = mysqli_query($conn,$sql_tns);
												
												 while($res_tns = mysqli_fetch_assoc($mysql_tns)){
											?>
													  <tr>
                                                        <td><?php echo $res_tns['name'];?></td>
                                                        <td><?php echo $res_tns['way'];?></td>
                                                        <td><?php echo $res_tns['type'];?></td>
                                                        <td><?php echo $res_tns['departure_date'];?></td>
                                                        <td><?php echo $res_tns['time'];?></td>
                                                        <td><?php echo $res_tns['seat_status'];?></td>
                                                        <td><?php echo $res_tns['cost'];?></td>  
                                                        <td></td>                              	   
                                                        <td><a href="custom.php?id=<?php echo $selected?>&date=<?php echo $date_?>&seats=<?php echo $quantity?>&tns_id=<?php echo $res_tns['transport_id'];?>&tns_sdl_id=<?php echo $res_tns['ts_id'];?>" class="remove"><button class="btn-danger btn-sm btn" name="submit_transport" type="button">add to cart</button></a></td>
                                                        
                                                     </tr>
	   										 <?php
												}
											 ?>
											
                                           </table>
                                         
                                  	</form>
                                    <?php
										}
									 ?>
                                     
                                     
                                  </div>
                                  <div role="tabpanel" class="tab-pane" id="cart">
                                  		<h2 class="heading">yout transport info</h2>
                                        	 <table class="table table-hover table-bordered">    
                                            	<th>place</th>
                                                <th>transport</th>
                                                <th>date</th>
                                                <th>time</th>
                                                <th>seats</th>
                                                <th>total cost</th>
                                            
                                              <?php
												 
												 $sql_c1 = "select tns_temp.tns_temp_id,tns_temp.tns_id,tns_temp.tns_sdl_id,tns_temp.date,tns_temp.seats,transport.name as name,transport.cost,transport.transport_id,transport.place_ID,place.place_id,place.name as NAME,transport_schedule.ts_id,transport_schedule.time,transport_schedule.transport_ID from tns_temp,transport,place,transport_schedule where tns_temp.tns_id=transport.transport_id and tns_temp.tns_sdl_id=transport_schedule.ts_id and place.place_id=transport.place_id";
												 										
												 $mysql_c1 = mysqli_query($conn,$sql_c1);
														 if (!$mysql_c1) {
																echo 'MySQL Error: ' . mysqli_error();
																exit;
															}
	
												
												 while($res_c1 = mysqli_fetch_assoc($mysql_c1)){
												 $total_cost=$res_c1['seats']*$res_c1['cost'];
												 $aa=$res_c1['name'];
												 
											?>
                                            		<tr>
                                            			<td><?php echo $res_c1['NAME'];?></td>
                                                        <td><?php echo $res_c1['name'];?></td>
                                                        
                                                        <td><?php echo $res_c1['date'];?></td>
                                                        <td><?php echo $res_c1['time'];?></td>
                                                        <td><?php echo $res_c1['seats'];?></td>
                                                         <td><?php echo $total_cost?></td>
                                                   </tr>       
	   										 <?php
												}
											 ?>
                                              </table>
                                              
                                              <h2 class="heading">yout hotel info</h2>
                                        	 <table class="table table-hover table-bordered">    
                                            	<th>name</th>
                                                <th>rooms</th>
                                                <th>total cost</th>
                                            
                                              <?php
												 
												 $sql_c2 = "select hotel.*,htl_temp.* from hotel,htl_temp where htl_temp.htl_id=hotel.hotel_id";
												 										
												 $mysql_c2 = mysqli_query($conn,$sql_c2);
														 if (!$mysql_c1) {
																echo 'MySQL Error: ' . mysqli_error();
																exit;
															}
	
												
												 while($res_c2 = mysqli_fetch_assoc($mysql_c2)){
												 $total_costs=$res_c2['rooms']*$res_c2['cost'];
												 
											?>
                                            		<tr>
                                                        <td><?php echo $res_c2['name'];?></td>
                                                        <td><?php echo $res_c2['rooms'];?></td>
                                                        <td><?php echo $total_costs?></td>
                                                   </tr>       
	   										 <?php
												}
											 ?>
                                              </table>
                                              <br>
                                              <form>
                                             <input type="text" class="form-control"  name="name_us" placeholder="name">
                                             <input type="text" class="form-control"  name="email_us" placeholder="email">  
                                             <input type="submit" class="btn-success" value="submit" name="submit_cart">
                                              </form>
                                             		
                                  </div>
							  </div>                
                	</div>
                
                
                </div>
             </div> 
              
          </div>
</div>


                     
  </body>
  
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
   <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'yyyy-MM-dd',
        language: 'en'
      });
	  
	  </script>
      <script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>
</html>