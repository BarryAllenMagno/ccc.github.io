<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<title>Cornerstone Christian Community</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body style="background-color: #eaeae1">
	<?php $username = $this->session->userdata('username'); ?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
					<div class="navbar-header col-lg-10">
	    				<a class="navbar-brand" href="<?=base_url().'admin/dashboard'?>" style="color: #fff"><h4>CORNERSTONE CHRISTIAN COMMUNITY</h4></a>
					</div>
					<div class="col-lg-2" style="margin-top: 15px;" id="bs-example-navbar-collapse-2">
						<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#008ae6;"><i class="fa fa-user-circle-o"></i> Account</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<?php
						$user_id = $this->session->userdata('user_id');
				 ?>
				 <?php if($user_id == '1'): ?>
				<a class="dropdown-item" href="<?=base_url().'admin/dashboard'?>">Dashboard</a>
				<a class="dropdown-item" href="<?=base_url().'welcome/logout'?>">Sign out</a>
			 <?php else: ?>

			<?php endif; ?>
			</div>
		</div>
					</div>
				</div>

	</nav>
