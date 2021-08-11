<?php $this->load->view("templates/header"); ?>

		<div class="container">
				<div class="jumbotron">
						<h2 class="display-3" style="text-align: center;">ADMIN LOGIN</h2>
						<hr>
						<div class="my-4">
								<div class="row">
									<?php if($chkAdminExist=='1' || $chkAdminExist > '1'): ?>

									<?php else: ?>
										<div class="col-lg-4">
												<?php echo anchor("welcome/adminRegister","ADMIN REGISTER", ['class'=>'btn btn-primary']); ?>
										</div>
									<?php endif;?>
										<hr download style="visibility: hidden">
										<div class="col-lg-4">
												<?php echo anchor("welcome/login","ADMIN LOGIN", ['class'=>'btn btn-primary', 'style' => ('margin: 5px 0px 0px 0px')]); ?>
										</div>
								</div>
						</div>
				</div>
		</div>
<?php $this->load->view("templates/footer"); ?>
