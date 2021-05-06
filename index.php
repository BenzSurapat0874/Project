<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Green Refund Machine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	<?php
	include_once('connect.php');
	include_once('head.php');
	include_once('checkreward.php');
?>
   
	  <section id="home-section" class="hero">
	  	<h3 class="vr">Welcome to GRMWEB</h3>
		  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/b5.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Welcome to the GRM WEBSITE</span>
			            <h1 class="mb-4 mt-3">Green Refund Machine <span>GRM</span></h1>
			            <p>เว็บไซต์สำหรับตรวจสอบคะแนนสะสมเพื่อแลกเปลี่ยนเป็นเงิน เป็นการออมในเงินรูปแบบการเปลี่ยนขวดน้ำพลาสติกเป็นเงิน!!</p>
			            
			            <p><a <?php  
              if(isset($_SESSION['user_id']))
              {  echo 'data-toggle="modal"'; echo 'data-target="#CModal"';  }
               ?> href="login1.php" class="btn btn-primary px-5 py-3 mt-3">CHACK REWARD</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/b4.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Welcome to the GRM WEBSITE</span>
			            <h1 class="mb-4 mt-3"><span>G</span> Green <br> <span>R</span> Refund <br> <span>M</span> Machine </h1>
			            <p>เว็บไซต์สำหรับตรวจสอบคะแนนสะสมเพื่อแลกเปลี่ยนเป็นเงิน เป็นการออมในเงินรูปแบบการเปลี่ยนขวดน้ำพลาสติกเป็นเงิน!!</p>
			            
			            <p><a <?php  
              if(isset($_SESSION['user_id']))
              {  echo 'data-toggle="modal"'; echo 'data-target="#CModal"';  }
               ?> href="login1.php" class="btn btn-primary px-5 py-3 mt-3">CHACK REWARD</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
		
	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-6 heading-section text-center ftco-animate">
          	<span class="subheading">GRMWEB</span>
            <h2 class="mb-4">Green University</h2>
            <p>โครงการตู้รับซื้อขวดน้ำอัตโนมัติเพื่อความเป็นมหาวิทยาลัยสีเขียว</p>
          </div>
        </div>
        <div class="row">
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(image/3icon4.png);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">สิ่งแวดล้อม</h3>
									<span class="position mb-4">ช่วยเสริมสร้างจิตใจที่รักษ์สิ่งแวดล้อม</span>
									
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(image/3icon5.png);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">กลับมาใช้ใหม่</h3>
									<span class="position mb-4">ลดปริมาณขยะที่มีมากมายในปัจจุบัน</span>
									
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(image/3icon6.png);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">สร้างจิตสำนึก</h3>
									<span class="position mb-4">ช่วยเสริมสร้างจิตใจที่รักษ์สิ่งแวดล้อม</span>
									
		            </div>
							</div>
						</div>
					</div>
					
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>
	<section class="ftco-section " id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
           
            <h2 class="mb-4">กติกาการรับซื้อขวดน้ำ</h2>
            
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a  class="block-20" style="background-image: url('image/rule11.png');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">1</span>
              		</div>
				

              	</div>
                <h3 class="heading">ขวดน้ำที่ขายได้จะต้องอยู่ภายในฐานข้อมูลเท่านั้น</h3>
                <p>ANestle : size 1500 ml, 600 ml, 350 ml <br>
				  Crystal : size 1500 ml, 600 ml, 320 ml</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a class="block-20" style="background-image: url('image/rule7.png');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">2</span>
              		</div>
              		
              	</div>
                <h3 class="heading">ขนาดของขวดน้ำมีราคาที่เเตกต่างกัน</h3>
                <p>- Size S 0.25 บาท         - Size M  0.32 บาท  	- Size L  0.375 บาท </p>
               
              </div>
            </div>
		  </div>
		  <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a  class="block-20" style="background-image: url('image/rule8.png');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">3</span>
              		</div>
              		
              	</div>
				<h3 class="heading">ผู้ใช้งานจะต้องมียอดเงิน 20 บาทขึ้นไปถึงจะทำการเเลกเป็นเงินสดได้</h3>
				<p>และแต้มรางวัลสามารถนำไปแลกของรางวัลได้และยอดเงินสามารถนำไปแลกเป็นเงินสดได้ที่ห้องสมาคมศิษย์เก่าคณะครุศาสตร์
				</p>
               
                
              </div>
            </div>
          </div>
		  
        </div>
      </div>
    </section>
 
   
  
	<section class="ftco-section ftco-project bg-light" id="projects-section">
    	<div class="container px-md-2">
		<div class="row justify-content-center pb-8">
		<div class="col-md-6 heading-section text-center ftco-animate">
    		
			
          <div class="col-md-15 heading-section text-center ftco-animate">
			  <span class="subheading">GRMWEB</span>
			<h2 class="mb-4">รายการของรางวัล</h2>
			<p>แลกของรางวัลโดยใช้ Point สามารถแลกได้ที่ห้องสมาคมศิษย์เก่าคณะครุศาสตร์</p><br> <br>
			</div>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 testimonial">
            <div class="carousel-project owl-carousel">
			<?php                                 
                 $sql = "SELECT * FROM `reward` ";                     
                    if ($result = $conn->query($sql)) {
                       while ($row = $result->fetch_assoc()) { ?>
            	<div class="item">
            		<div class="project">
		    					<div class="img"> 
				    				<img src="images/<?php echo $row['Img'];?>" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a ><?php echo  $row['Description']?></a></h3>
				    					<span><?php echo  $row['point']?> Point</span>
				    				</div>
			    				</div>
		    				</div>
				</div>
				<?php }} ?>
            	
            </div>
          </div>
    		</div>
    	</div>
    </section>

  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>