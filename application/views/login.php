<!doctype html>
<html lang="en">
  <head>
  	<title>Anghauz Indonesia </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="<?php echo base_url()?>asset/logo.jpg" type="image/gif" >
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url()?>asset/login/css/style.css">

	</head>
	<body>
	<section class="ftco-section" style="background-image: url(<?php echo base_url()?>asset/dist/img/bacground.jpg); background-size:100%,100%;">
		<div class="container">			
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-7">
					<div class="wrap d-md-flex">
						<div class="login-wrap p-4 p-lg-4 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<img src="<?php echo base_url()?>asset/logo.jpg" style="width: 100%;
  height: auto;">			
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Welcome </h3>
			      		</div>	      		
								
			      	</div> <div id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
							<form action="<?php echo base_url('Auth/chek_login')?>" class="signin-form" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name" >Username</label>
			      			<input type="text" class="form-control" name="username" id="username"  autocomplete="username" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password"  >Password</label>
		              <input type="password" class="form-control" name="password" id="password"  autocomplete="current-password" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="submit" id="submit" class="form-control btn btn-primary submit px-3">Log In</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url()?>asset/login/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>asset/login/js/popper.js"></script>
  <script src="<?php echo base_url()?>asset/login/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>asset/login/js/main.js"></script>

	</body>
</html>

