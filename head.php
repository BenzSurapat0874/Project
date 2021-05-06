<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">

	    <div class="container">
	      <a class="navbar-brand" style="cursor:hand;cursor: pointer;" onclick="JavaScript:window.location.href='index.php'"  >GRM<span>WEB</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	      
            <ul class="navbar-nav nav ml-auto">
            <ul class="navbar-nav nav ml-left">
            
	          <li class="nav-item"><a href="index.php" class="nav-link"><span>Home</span></a></li>
            <li class="nav-item"><a <?php  
              if(isset($_SESSION['user_id']))
              {  echo 'data-toggle="modal"'; echo 'data-target="#CModal"';  }
               ?> href="login1.php"  class="nav-link"><span>Check Reward</span></a></li>
	          <li class="nav-item"><a href="single.php"  class="nav-link"><span>Location</span></a></li>
            
          
            <?php  
                        if(isset($_SESSION['user_id'])){  
                      
                                echo '                               
                               
                               
                                <li class="nav-item active">
                                    <a class="nav-link" href="logoutUser.php">Logout</a>
                                </li>
                                ';
                        
                        } else {

                          echo  '<li class="nav-item"><a href="login1.php" class="nav-link"><span>Login</span></a></li>';
                        }
                        
                        
                    ?>


            </ul>  
            

                    
	        </ul>
	      </div>
	    </div>
	  </nav>