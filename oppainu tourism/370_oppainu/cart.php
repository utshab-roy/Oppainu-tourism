 <?php
session_start();
$login_usr=0;
$user_session_usr ="";
$fileName="";
$conn=mysqli_connect("localhost","root","","project370");
$date_='not_selected';
$ids = array("","");
?>
 <?php

		if(isset($_REQUEST['id']))
		{
			$selected= $_REQUEST['id'];
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
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"  class="active"><a href="#transport" aria-controls="#transport" role="tab" data-toggle="tab">select transport</a></li>
                            <li role="presentation"><a href="#hotel" aria-controls="#hotel" role="tab" data-toggle="tab">select hotel</a></li> 
                            <li role="presentation"><a href="#date" aria-controls="#date" role="tab" data-toggle="tab">select date</a></li>
                            <li role="presentation"><a href="#cart" aria-controls="#cart" role="tab" data-toggle="tab">my cart</a></li>
                          </ul>
                        
                          <!-- Tab panes -->
                              <div class="tab-content">
                                  <div role="tabpanel" class="tab-pane" id="hotel">
                                  	<h2 class="heading">availanle hotels in <?php echo $res_data['name'];?></h2>
                                  	<form role="form" action="" method="post" enctype="multipart/form-data">
                                            <table class="table table-hover table-bordered">
                                                <tr>
                                                    <th>name</th>
                                                    <th>address</th>
                                                    <th>type</th>
                                                    <th>phone</th>
                                                    <th>cost</th>
                                                    <th>quantity</th>
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
                                                        <td><input type="text" class="form-control"  name="quantity" placeholder="number of rooms"></td>                              	   
                                                        <td><a href="" class="remove"><button class="btn-danger btn-sm btn" name="submit_hotel" type="button">add to cart</button></a></td>
                                                     </tr>
	   
											<?php
                                                }
                                             ?>
                                           </table>
                                         
                                  	</form>
                                    
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
                                     <input type="submit" class="btn-success" value="submit" name="submit_date">
                                     <?php if(isset($_REQUEST['submit_date'])){
                                     	 $date_ = $_POST['date'];
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
                                                    <th>quantity</th>
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
                                                        <td><input type="text" class="form-control"  name="quantity" placeholder="number of seats"></td>                              	   
                                                        <td><a href="" class="remove"><button class="btn-danger btn-sm btn" name="submit_transport" type="button">add to cart</button></a></td>
                                                        
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
                                  <div role="tabpanel" class="tab-pane" id="date">
                                  </div>
                                  <div role="tabpanel" class="tab-pane" id="cart">
                                  			<h2 class="heading">submit for confirmation </h2>
                                            	
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
</html>