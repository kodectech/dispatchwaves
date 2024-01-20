<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/adminlte.css">
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/styles.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = '<?php echo base_url ?>';
    </script>
    <script src="<?php echo base_url ?>dist/js/script.js"></script>
    <script src="<?php echo base_url ?>assets/js/scripts.js"></script>


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Customized CSS -->
  <link href="css/tracking.css" rel="stylesheet">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    
  </head>
<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600);

body{
    font-size: 15px;
    font-family: "Roboto";
}

/* This page custimazatin */
.barcode{
    display: flex;
    justify-content: center;
}
.barcodeimg{
    width: 180px;
    height: 70px;
    
}

.flexme{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

/* style for table */

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: auto;
  padding: 0;
  width: 100%;
  table-layout: fixed;
  width: 90%;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
  
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
  background-color: #0099cc;
  color: #fff;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: 1em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}









/* Status design starts Here */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Rancho&family=Water+Brush&display=swap');
        

        .main{
            width: 100%;
            height: auto;
            /* background-color: rgb(245, 245, 245); */
            font-family: poppins;
            padding: 50px 0;
            display: grid;
            place-items: center;
        }
        .main .heading{
            font-size: 27px;
            font-weight: 500;
            color: #002;
            position: relative;
            margin-bottom: 80px;
        }
        .heading2{
            font-size: 25px;
            font-weight: 500;
            color: #002;
            position: relative;
            margin-bottom: 80px;
            font-family: poppins;
        }
        .heading2::after{
            content: " ";
            position: absolute;
            width: 50%;
            height: 4px;
            left: 50%;
            bottom: -5px;
            background-color: #002;
            transform: translateX(-50%);
        }
        .heading::after{
            content: " ";
            position: absolute;
            width: 50%;
            height: 4px;
            left: 50%;
            bottom: -5px;
            background-color: #002;
            transform: translateX(-50%);
        }

        /* Container Css Start  */

        .container{
            width: 70%;
            height: auto;
            position: relative;
        }
        .container ul::after{
            position: absolute;
            content: '';
            width: 2px;
            height: 100%;
            background-color: #cdcdcd;
        }
        .container ul{
            list-style: none;
            
        }
        .container ul li{
            width: 50%;
            margin-left: 200px;
            height: auto;
            padding: 15px 20px;
            background-color: #fff;
            margin-bottom: 60px;
            border-radius: 10px;
            box-shadow: 4px 4px 25px rgba(51, 51, 51, 0.192);
            position: relative;
            z-index: 99;
        }
        .container ul li{
            float: left;
            clear: both;
            transform: translateX(-30px);
        }
        .container ul li:nth-child(odd) .date{
            right: 20px;
        }
       
        .container ul li .title{
            font-size: 15px;
            font-weight: 500;
            color: #002;
        }
        ul li p{
            font-size: 15px;
            color: #444;
            margin: 7px 0;
            line-height: 23px;
        }
        ul li a{
            font-size: 15px;
            color: rgb(106, 6, 236);
            text-decoration: none;
        }
        ul li .date{
            position: absolute;
            top: -35px;
            width: 200px;
            height: 25px;
            
            color: #002;
            
            
            place-items: center;
            font-size: 11px;
        }
        .container ul li .circle{
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #4cbb87;
            position: absolute;
            top: 0;
        }
        .container ul li .circle::after{
            content:"✔";
            color: #fff;
            position: absolute;
            width: 15px;
            height: 15px;
            
            border-radius: 50%;
            top: 43%;
            left: 54%;
            transform: translate(-50%, -50%);
        }
        .container ul li:nth-child(odd) .circle{
            right: -30px;
            transform: translate(50%, -50%);
        }
        .container ul li:nth-child(even) .circle{
            left: -30px;
            transform: translate(-50%, -50%);
        }

        /*  Media Query Started  */

        @media screen and (max-width:1224px){
            .container{
                width: 85%;
            }
        }

        @media screen and (max-width:993px){
            .container{
                width: 80%;
                transform: translateX(15px);
            }
            .container ul::after{
                left: 15px;
                top: 0;
            }
            .container ul li{
                width: 100%;
                float: none;
                clear: none;
                margin-bottom: 80px;
                margin-left: 0;
            }
            .container ul li:nth-child(odd){
                text-align: left;
                transform: translateX(0);
            }
            .container ul li:nth-child(odd) .date{
                left: 20px;
            }
            .container ul li:nth-child(odd) .circle{
                left: -30px;
                transform: translate(-50%, -50%);
            }
            .container ul li:nth-child(even){
                transform: translateX(0);
            }
        }

 









/* general styling */
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}


/* table style ends here */


    
    .mob-img{
        width:100%;
        max-height:20vh;
        object-fit:scale-down;
        object-position:center center;
    }
	.track-heading {
		text-align: center;
		margin: 30px 0;
		background:#9c0000;
		color:#ffffff;
		padding: 15px;
		
		font-size: 1.2rem;
	}
	.icon-track {
		text-align:center;
	}
	.row-flex{
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		gap: 70px;
		
		
	}
	
	.row-flex2{
		display:flex;
		justify-content:space-between;
		
	}
	.padd-contents{
		padding: 10px;
		box-sizing:border-box;
	}
	.remove-hr{
		display:none;
	}
	
	
	
	
	
	@media (max-width:800px){
		.track-heading{
			font-size: 1rem;
		}
		.row-flex{
		display: block;
		
	
		}
		.row-flex2{
		display: flex;
		flex-direction:column;
		gap: 10px;
		}
		.remove-hr{
			display:block;
		}
	}
	
	
	

	


</style>

<?php
extract($_GET);
$qry = $conn->query("SELECT * from `cargo_list` where ref_code = '{$ref_code}' ");
if($qry->num_rows > 0){
    foreach($qry->fetch_assoc() as $k => $v){
        $$k=$v;
    }
}
?>





<header class="header">
</header>

 <!-- Topbar Start -->
 <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>(216) 505-0382</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@cargoforcelines.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center social-icons">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-telegram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="my-header navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <!-- <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>Faster</h1> -->
                <img src="image/logo2.png" alt="" class="logo">
            </a>
            <button style="color: #fff; margin-left: 320px; border: 1px solid #fff; padding: 5px 10px;" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Headlines</a>
                            <a href="single.html" class="dropdown-item">News</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="trace_form.php" class="nav-item nav-link active">Tracking</a>
                </div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Get A Quote</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


   
   
   
    <!-- HERO STARTS HERE -->
    <!-- GRID THIS HERO -->
    <div style="height: 520px;" class="hero">
      <!-- COLUMN FLEX THIS LEFT-SIDE -->





      
      <div class="left-side">
          <h1>Universal Package Tracking</h1>
          <p>Have absolute awareness of the locations of your package and parcel all around the world. </p>
          <form action="" id="trace-frm">
              <input class="remove-input" type="text" placeholder="Consignment number" required name="ref_code">

              <button class="track-btn"> TRACK PACKAGE</button>
          </form>
      </div>
      <div class="right-side">
              <img src="image/realhero-img.png" alt="">
      </div>
  </div>
<!-- Header End -->




<!-- ====================================================================== -->

<section id="tracker" class="py-0 " style="margin-top: 30px; margin-left: -30px;">
    <div class="container">
        <div class="col-lg-12 py-2">
         
			
			<!-- This is me and michael tseting the outprint for users -->
			<section class=" ">
			 <div id="outprint" >
			 <!-- <div class="icon-track">

            <img src="<?= validate_image($_settings->info('logo')) ?>" alt="Skywaysfreight" width="216" height="74" >
            </div> -->


            <?php 
            if(!isset($id)){
                echo "";
                }else{
                    $meta_qry = $conn->query("SELECT * FROM `cargo_meta` where cargo_id = '{$id}'");
					while($row = $meta_qry->fetch_assoc()){
					${$row['meta_field']} = $row['meta_value'];
					}
                 
                    echo "WELCOME, ";
                    echo  isset ($receiver_name) ? $receiver_name : "" ;
                    
                    

                    echo "<br><br>";
                    echo '<p style="font-family: Roboto; text-align: justify;">A consignment was sent to you through CargoForceLines Logistics Company   
                    We recommend that you regularly keep track of your freight through our 
                    tracking system here. Feel free to contact us through our support Chatbox 
                    if you need any assistance.</p>';
                    echo '<br><br>';
                    
                    echo  '<p style="font-size: 20px; font-family:arial; text-align: center;" class="barcode"><b>';
                    echo  "YOUR CONSIGNMENT DETAILS ARE AS STATED BELOW" . '</p></b>';
                    echo '<br><br>';

                    echo '<div class="barcode">';
                    echo '<img class="barcodeimg" src="image/barcode.png">';
                    echo '<div></div>';
                    echo '</div>';
                    echo  '<p style="font-size: 20px; font-family:arial;" class="barcode">';
                    echo  isset($ref_code) ? $ref_code : "" . '</p>';
                    echo '<br><br><br>';

                } ?>
















                
            
                <div class="row-flex">
                    <div>
                        <fieldset>
						<?php
                        if(!isset($id)){
                            echo "Your Tracking ID Number is not correct. Kindly Contact us for a solution." ;
                            
                        }else{
                            echo '<div style="background:#ddd; width: 100%;">';
                            echo '<p style=" color:#000; padding:5px;">From (Consignor)</p>';
                            echo '</div>';
                            
                        }
                        ?>
                            
                            <div>
								<?php 
								if(!isset($id)){
								echo "";
								}else{
                                    $meta_qry = $conn->query("SELECT * FROM `cargo_meta` where cargo_id = '{$id}'");
								while($row = $meta_qry->fetch_assoc()){
								${$row['meta_field']} = $row['meta_value'];
									}

                                    echo '<div style="margin-bottom: 6px;">';
                                    echo 'Name:  ', isset ($sender_name) ? $sender_name : "" ;
                                    echo '</div>';
                                    echo '<div style="margin-bottom: 6px;">';
                                    echo 'Email:  ', isset ($sender_contact) ? $sender_contact : "" ;
                                    echo '</div>'                                    ;                                    

                                    echo '<div style="margin-bottom: 6px;">';
                                    echo 'Address:  ', isset($sender_address) ? $sender_address : "";

                                    echo "</div>";
                                    echo '<div style="margin-bottom: 6px;">';
                                    echo 'Verification Type:  ', isset($sender_provided_id_type) ? $sender_provided_id_type : "";

                                    echo "</div>";
                                    echo 'Verification No:  ', isset($sender_provided_id) ? $sender_provided_id : "";

                                    echo '<br>';
                                    echo '<br>';

                                }
								
								?>
								
                                <!-- <span><?= isset($sender_contact) ? $sender_contact : "" ?></span><br> -->

								
                                
                                </span>
                            </div>
                        </fieldset>
                    </div>
		
                    
                    <div>
					
                        <fieldset>
                        <?php
                        if(!isset($id)){
                            echo "";
                        }else{
                    
                            echo '<div style="background:#ddd; width: 100%;">';
                            echo '<p style=" color:#000; padding:5px;">To (Consignee)</p>';
                            echo '</div>';

                            echo '<div style="margin-bottom: 6px;">';

                            echo '<span>' . 'Name:  ', isset($receiver_name) ? ucwords($receiver_name) : "" . "</span><br>";
                            echo "</div>";

                            echo '<div style="margin-bottom: 6px;">';
                            echo '<span>' . 'Email:  ' ,isset($receiver_contact) ? $receiver_contact : "" ."</span><br>";
                            echo "</div>";

                            echo '<div style="margin-bottom: 6px;">';
                            echo '<span>' . 'Address:  ' ,isset($receiver_address) ? $receiver_address : "" ."</span><br>";
                            echo "</div>";

                            echo '<div style="margin-bottom: 6px;">';
                            echo '<span>' . 'Carrier:  ' ,isset($Carrier) ? $Carrier : "" ."</span><br>";
                            echo "</div>";

                            echo '<div style="margin-bottom: 6px;">';
                            echo '<span>' . 'Product Item:  ' ,isset($receiver_provided_id) ? $receiver_provided_id : "" ."</span>";
                            echo '</div>';
                        }
                        ?>
                            
                                
                                
                                
                                
                                
                            </div>
                        </fieldset>
                    </div>
                </div>

                <?php
                if(!isset($id)){
                   echo '';
                  }else{
				
                echo '<div style="background:#ddd; width: 100%; margin-top: 30px">';
                            echo '<p style=" color:#000; padding:5px; text-align: center">Consignment Details</p>';
                            echo '</div>';
                
                echo '<div class="clear-fix my-3"></div>
				    <div class="row-flex2">
                    <div>';

                   
                        
                  echo '
                            <fieldset>';
                            
                            echo '
                            <large>Consignment ID: </large> ';
                            echo '
                            <div class="pl-3">
                                <span>' .  isset($ref_code) ? $ref_code : "" . '</span>
                            </div>
                        </fieldset>
                            ';

                
                            

                            
                        }
                        ?>
                        
                    </div>


                    <div>
                        <fieldset>
                        <?php
                        if(!isset($id)){
                            echo '';
                        }else{
                            echo '<large>Shipment Origin: </large> ';
                            echo '
                            
                            <div class="pl-3">
                                <span>' . isset($from_location) ? $from_location : "" . '</span>
                            </div>
                            ';
                        }?>
                        </fieldset>
                    </div>


                    <div>
                        <fieldset>
                        <?php
                        if(!isset($id)){
                            echo '';
                        }else{
                            echo '<large>Status: </large>  ';
                            
                             if($status == 1){
                                echo '
                                <span class="badge badge-primary badge-lg bg-gradient-primary px-3 rounded-pill">In-Transit</span>';
                                echo '<span style="color: red; font-size: 12px;">  35% Completed </span>';
                                
                             }
                            elseif($status == 2){
                                echo '
                                <span class="badge badge-warning badge-lg bg-gradient-warning px-3 rounded-pill">Arrived at Station</span>';
                                echo '<span style="color: red; font-size: 12px;">  75% Completed </span>';
                            }
                            elseif($status == 3){
                                echo '
                                <span class="badge badge-light badge-lg bg-gradient-light border px-3 rounded-pill">Out for Delivery</span>';
                                echo '<span style="color: red; font-size: 12px;">  88% Completed </span>';
                                
                            }
                            elseif($status == 4){
                                echo '
                                <span class="badge badge-success badge-lg bg-gradient-success px-3 rounded-pill">Delivered</span>';
                                echo '<span style="color: red; font-size: 12px;">  100% Completed </span>';
                            
                            }
                            elseif($status == 5){
                                echo '
                                <span class="badge badge-secondary badge-lg bg-gradient-success px-3 rounded-pill">Pending</span>';
                                echo '<span style="color: red; font-size: 12px;">  45% Completed </span>';
                            
                            }
                            else{
                                echo '
                                <span class="badge badge-secondary badge-lg bg-gradient-secondary px-3 rounded-pill">Pending</span>';
                                echo '<span style="color: red; font-size: 12px;">  15% Completed </span>';
                            }
                           
                        }?>
                        </fieldset>
                    </div>


                    <div>
                        <fieldset>
                        <?php
                        if(!isset($id)){
                            echo '';
                        }else{
                            echo '<large>Shipment Destination: </large> ';
                            echo '
                            
                            <div class="pl-3">
                                <span>' . isset($to_location) ? $to_location : "" . '</span>
                            </div>
                            ';
                        }?>
                        </fieldset>
                    </div>
                    <div>
                        <fieldset>
                        <?php
                        if(!isset($id)){
                            echo '';
                        }else{
                            echo '<large>Arrival Date And Time:</large>  ';
                            echo '
                            
                            <div class="pl-3">
                                <span> ' . isset($arrival_date) ? $arrival_date : "" . '</span>
                            </div>';
                        }
                            ?>
                        </fieldset>
                    </div>
                    <div>
                        <fieldset>
                        <?php
                        if(!isset($id)){
                            echo '';
                        }else{
                            echo '
                            <large>Shipment Type: </large>
                            
                                <span> ';}
                                    
                                    // $status = isset($status) ? $status : '';
                                    // switch($status){
                                        // case '1':
                                            // echo "City to City";
                                            // break;
                                        // case '2':
                                            // echo "State to State";
                                            // break;
                                        // case '1':
                                            // echo "Country to Country";
                                            // break;
                                        // default:
                                            // echo "N/A";
                                            // break;
                                    // }
                                    
									
									//<!-- Note that this code works as above, for switches and cases -->
									//<?php
                                    if(empty($shipping_type)){
                                        echo "";

                                    }elseif ($shipping_type == 1) {
										echo 'Air frieght';
									}
									elseif($shipping_type == 2){
										echo 'Land Transport';
									}
									elseif($shipping_type == 3){
										echo 'Sea Shipping';
									}
									
									
									?>
                                </span>
                        
                        </fieldset>
                    </div>
                </div>
				</div>
                <div class="clear-fix my-3"></div>
                <div class="row">

                <!-- customization for client -->
                <table>
                <thead>
                <div class="col-lg-4 col-md-4 col-sm-4">
                       
                            <?php
                            if(!isset($id)){
                                echo '';
                            }else{
                                echo ' <tr>
                                <th><large class="font-weight-bolder">Product Category</large></th>
                                <th><large class="font-weight-bolder">Total Freight</large></th>
                                <th><large class="font-weight-bolder">Weight(kg)</large></th>


                            </tr>';
                            
                            echo '</thead>';
                            echo '<tbody>';

                            echo '
                            <tr>
                                <td data-label="Category"><span>'; 
                                
                                echo isset($product_category) ? $product_category : "" ;
                                
                                echo 
                                '</span></td>
                                <td data-label="Total Freight"><span>'; 
                               
                                echo  isset($total_freight) ? $total_freight : "" ;
                                echo  '</span></td>
                                <td data-label="Weight (Kg)"><span>';
                       
                                echo isset($weight_kg) ? $weight_kg : "";
                                echo  '</span></td>';
                                
                                echo  '</tr> ';
                            
                            

                            echo '</tbody>';

                            }
                        ?>


                        

                    <!-- <div class="col-12">
                        <table class="table table-bordered">
                            <colgroup>
                                <col width="40%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="px-2 py-1 text-center">Package Category</th>
                                    <th class="px-2 py-1 text-center">Price</th>
                                    <th class="px-2 py-1 text-center">Weight (kg.)</th>
                                    <th class="px-2 py-1 text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="px-1 py-1 text-center" colspan="3"><b>Total Amount</b></th>
                                    <th class="px-1 py-1 text-right"><b><?= isset($total_amount) ? format_num($total_amount) : "" ?></b></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> -->
                </div>
                        
            </table>
            </div>
			</section>
			
			<!-- End of testing -->
			
			
			
			
			
			
			
			
			
            <!-- <div class="container px-4 px-lg-5 mt-5">
               <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                        <?php if(isset($id)): ?>
                        <h4><span class="text-muted">Shipment History</b></h4>
						<hr>
                        <div id="history" style="border-left:#9c0000 3px solid; padding:12px; margin-bottom: 10rem;">
                            <?php 
                            $tracks = $conn->query("SELECT * FROM `tracking_list` where cargo_id = '{$id}' order by unix_timestamp(date_added) asc");
                            while($row = $tracks->fetch_assoc()):
                            ?>
                            <div class="card card-default shadow rounded-0">
                                <div class="card-header py-1" style="background:#9c0000; color:#fff;">
                                    <h5 class="card-title"><b><?= $row['title'] ?></b></h5>
                                </div>
                                <div class="card-body" style="border-left:1px solid #9c0000;">
                                    <div class="card-text"><?= $row['description'] ?></div>
                                    <div class="clear-fix"></div>
                                    <div class="text-right"><small class="text-muted"><em><?= date("F d, Y h:i A", strtotime($row['date_added'])) ?></em></small></div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>


         




                        <?php else: ?>
                            <h4 style="text-align:center;" class="text-ceter"><em>Oops, Unknown Shipment Reference Code</em></h4>
							<p style="background:tomato; color:#fff; text-align:center;"> Please kindly enter the correct Consignment Number issued to you!</p>
                        <?php endif; ?>
                    </div>
               </div>

            </div> -->

             <!-- For other tracking details -->
          
        <!-- customization for client -->
        


    </div>
    </div>
</section>






<div class="main">
    <?php if(isset($id)): ?>
        <h3 class="heading"> Tracking</h3>

        <div class="container">
        <?php 
         $tracks = $conn->query("SELECT * FROM `tracking_list` where cargo_id = '{$id}' order by unix_timestamp(date_added) asc");
          while($row = $tracks->fetch_assoc()):
          ?>
          <div>
            <ul>

                <li>
                    
                    <h3 class="title"><?= $row['title'] ?></h3>
                    <p><?= $row['description'] ?></p>
                   
                    <span class="circle"></span>
                    <span class="date"><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name'); echo '  '; ?>  <?= date("F d, Y", strtotime($row['date_added'])) ?></span>
                    
                </li>
                </div>
                <?php endwhile; ?>
                
            </ul>
          </div>
    
    </div>
    <div class="container">
    <?php else: ?>
       <h4 style="text-align:center;" class="text-ceter"><em>Oops, Unknown Shipment Reference Code</em></h4>
		<p style="background:tomato; color:#fff; text-align:center;"> Please kindly enter the correct Consignment Number issued to you!</p>
    <?php endif; ?>
    </div>





<?php
  if(!isset($id)){
    echo '';
}else{ 

    $address = isset($receiver_address) ? $receiver_address : "";
    //To get more precise address
    $address = str_replace(" ", "+", $address);


    echo '
    <p style="text-align: center; margin:40px 0;" class="heading2">Receiver Address Location</p>';

    echo '<div style="width: 80%; margin: auto">';
    echo '<iframe style="width: 100%; height: 500px; margin: auto" src="https://maps.google.com/maps?q='.$address  . '&output=embed"></iframe>';
    
    echo '</div>';
}
?>












<?php
  if(!isset($id)){
echo '';
}else{ echo '
    <p style="text-align: center; margin:40px 0;" class="heading2">Detailed tracking information</p>
<table>
  <thead>
    <tr>
      <th scope="col">Details</th>
      <th scope="col">Current Location</th>
      <th scope="col">Arrival Day</th>
      <th scope="col">Arrival Date</th>
      <th scope="col">Arrival Country</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Details">';
      echo isset($detail1) ? $detail1 : "";
      echo '
      </td>
      <td data-label="Current Location">';
      echo isset($current_location1) ? $current_location1 : "";
      echo '
      </td>
      <td data-label="Arrival Day">';
      echo isset($arrival_day1) ? $arrival_day1 : "";
      echo '
      </td>
      <td data-label="Arrival Date">';
      echo isset($arrival_date1) ? $arrival_date1 : "";
      echo '
      </td>
      <td data-label="Arrival Country">';
      echo isset($arrival_country1) ? $arrival_country1 : "";
      echo '
      </td>
      <td data-label="Comment">';
      echo isset($comment1) ? $comment1 : "";
      echo '
      </td>
    </tr>

    <tr>
      <td data-label="Details">';
      echo isset($detail2) ? $detail2 : "";
      echo '
      </td>
      <td data-label="Current Location">';
      echo isset($current_location2) ? $current_location2 : "";
      echo '
      </td>
      <td data-label="Arrival Day">';
      echo isset($arrival_day2) ? $arrival_day2 : "";
      echo '
      </td>
      <td data-label="Arrival Date">';
      echo isset($arrival_date2) ? $arrival_date2 : "";
      echo '
      </td>
      <td data-label="Arrival Country">';
      echo isset($arrival_country2) ? $arrival_country2 : "";
      echo '
      </td>
      <td data-label="Comment">';
      echo isset($comment2) ? $comment2 : "";
      echo '
      </td>
    </tr>

    <tr>
      <td data-label="Details">';
      echo isset($detail3) ? $detail3 : "";
      echo '
      </td>
      <td data-label="Current Location">';
      echo isset($current_location3) ? $current_location3 : "";
      echo '
      </td>
      <td data-label="Arrival Day">';
      echo isset($arrival_day3) ? $arrival_day3 : "";
      echo '
      </td>
      <td data-label="Arrival Date">';
      echo isset($arrival_date3) ? $arrival_date3 : "";
      echo '
      </td>
      <td data-label="Arrival Country">';
      echo isset($arrival_country3) ? $arrival_country3 : "";
      echo '
      </td>
      <td data-label="Comment">';
      echo isset($comment3) ? $comment3 : "";
      echo '
      </td>
    </tr>
    
    
  </tbody>
</table>
          
'; }
?>

<br>
<br>
<br>





<main class="contain efs">
    <!--GRID THIS BUY-SEND-->
    <div class="buy-send">
      <!--FLEX THIS LEFT-TEXT-->
      <div class="left-text">
        <p>Buy, ship and deliver with us</p>
        <h1>EASY <span>&verbar;</span> FAST <span>&verbar;</span> SAFE</h1>
      </div>

      <div class="right-img">
        <img src="image/download.png" alt="">
      </div>
    </div>
  </main>



   
  <section class="contain needs-solution" id="services">
    <!--FLEX-COLUMN THIS SOLUTION-->
    <div class="solution">
      <!--FLEX COLUMN THIS ONLY-TEXT-->
      <div class="only-text">
        <h1 style="text-decoration: underline;">Our Service</h1>
        <h2>LET US HELP YOU TO FIND A SOLUTION THAT MEETS YOUR NEEDS</h2>
      </div>
      <!--GRID THIS WITH-IMG-->
      <div class="with-img">
        <!--FLEX-COLUMN ALL INDIVIDUAL(S)-->
        <div class="individual">
          <img src="image/asset1.png" alt="">
          <h1>550000km</h1>
          <p>Package Distance</p>
        </div>
        <div class="individual">
          <img src="image/asset2.png" alt="">
          <h1>634+</h1>
          <p>Countries Covered</p>
        </div>
        <div class="individual">
          <img src="image/asset3.png" alt="">
          <h1>142K</h1>
          <p>Happy Customers</p>
        </div>
        <div class="individual">
          <img src="image/asset4.png" alt="">
          <h1>18</h1>
          <p>Year Experience</p>
        </div>
      </div>
    </div>
  </section>



  <section class="faq-section" id="faq">
    <div class="container">
      <div class="row">
                        <!-- ***** FAQ Start ***** -->
                        <div class="col-md-6 offset-md-3">
    
                            <div class="faq-title text-center pb-3">
                                <h2>FAQ</h2>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3">
                            <div class="faq" id="accordion">

                                <div class="card foreign">
                                    <div class="card-header" id="faqHeading-1">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                <span class="badge">1</span>How do I obtain and manage my PO Box™?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-2">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                                <span class="badge">2</span> What options exist for late, lost, or no delivery?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>We have a team of professionals to handle any unfortunate occurance to your cargo. Please, kindly contact us via the contact links.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-3">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                <span class="badge">3</span>Change of Address
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Clients can change their cargo destination address, as long as it haven't been shipped. Any cargo loaded into the vessel has passed through all verifications can cannot be changed.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-4">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                                <span class="badge">4</span> Is there a priority mail express?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>At Cargo-Force Lines, we offerd our clients a priority mail express. Your cargo will be delivered to you 2 days after it has reached its destination.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-5">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                                <span class="badge">5</span> How do I know my mailpiece was delivered?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                        <div class="card-body">
                                            <p> Every mail sent us must be replied by our customer care team. This is to promote communication and transparency while engaging in quality shipping business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-6">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                                <span class="badge">6</span> How to calculate my package delivery price?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Every package has its categories with different prices. The price of a cargo is given depending on its weight.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-7">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                                <span class="badge">7</span> Is my cargo protected?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Yes! Your cargo is protected and its in safe hands. We also assign unique number to different cargo to protect their anonymousity.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    </section>


  <section class="contain best-rate">
    <!--FLEX THIS RATINGS-->
    <div class="ratings">
      <div class="rate-img">
        <img src="image/rating-img.png" alt="">
      </div>

      <!--FLEX COLUMN THIS TABLE-->
      <div class="atable">
        <p>We have the best rate</p>
        <table class="dtable">
          <tr>
            <th>LAND CARGO<br><span>(pound)</span></th>
            <th>OCEAN CARGO<br><span>(cubic meter)</span></th>
            <th>AIR CARGO<br><span>(pound)</span></th>
          </tr>
          <tr>
            <td>From $15</td>
            <td>From $25</td>
            <td>From $50</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
   
   
   
   
   
   
   


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>(216) 505-0382</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@cargoforcelines.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start persons-footer">
                            <a class="text-white mb-2" href="index.html" style="width: 8rem"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="about.html" style="width: 8rem"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="service.html" style="width: 8rem"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="contact.html" style="width: 8rem"><i class="fa fa-angle-right mr-2"></i>Contact us</a>
                            <a class="text-white" href="tracking.html" style="width: 8rem"><i class="fa fa-angle-right mr-2"></i>Tracking</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Cargo-Force Lines inspires passion, dedication and entrepreneurialism wherever you look. Helping to preserve the Cargo-Force Lines DNA and lead such a successful company into the future is a great honour and a privilege.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">cargo-force lines</a>. All Rights Reserved. 
				
				<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
				<!-- Designed by <a href="https://htmlcodex.com">HTML Codex</a> -->
                </p>
            </div>
            <!-- <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
    <!-- Footer End -->

c
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>









			
			

<!-- Parcel Tracking form JS function code -->			
<script>
 $(function(){
        
        $('#trace-frm').submit(function(e){
            e.preventDefault();
            location.href="./?p=trace&"+$(this).serialize()+"#tracker";
        })
    })
</script>





<script>
;(function($) {
    $.fn.polyfillColumns = function() {
        return this.each(function(e) {
            $masterTable = $(this);
            $masterTable.addClass("Table-polyfilled");
            var startSlice = 0,
                endSlice = startSlice + numberColumns,
                numberItems = $masterTable.children().length,
                $items = $masterTable.find(".Table-item"),
                numberColumns = parseInt($masterTable.attr("data-columns"));
            /*slice and dice!*/
            for (var i = 0; i < numberItems; i += numberColumns) {
            	startSlice = i;
                endSlice = startSlice + numberColumns;
                $items.slice(startSlice, endSlice).wrapAll( '<div class="Table-row"></div>' );    
            }
        });
    };
}(jQuery));
</Script>

<script>
(function(){
    if (!Modernizr.flexbox) {
    	$(".js-ColumnTable").polyfillColumns();   
    }
}(jQuery));
</script>



<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '30a55ceed844e29021e658dfac0fa0e35092403a';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>