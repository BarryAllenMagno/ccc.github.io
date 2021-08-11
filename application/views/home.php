<?php $this->load->view("templates/header"); ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<div class="container">
				<div class="jumbotron">
						<h2 class="display-5" style="text-align: center;">WELCOME!</h2>
						<hr>
						<div class="my-4">
								<div class="row">
                    <?php if($chkAdminExist=='1' || $chkAdminExist > '1'): ?>
                    <div class="col-lg-6">
                        <div class="d-grid mb-2">
                          <input class="btn btn-primary btn-login text-uppercase fw-bold" type="button" style="margin: 6px 0px 0px 0px; padding: 12px 12px 12px 12px"  value="ADMIN REGISTER" <?php if ($chkAdminExist=='1' || $chkAdminExist > '1'){ ?> disabled <?php   } ?>/>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="col-lg-6">
                    <a href="<?= base_url().'welcome/adminSignup'?>">
                      <div class="d-grid mb-2">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="button" style="margin: 6px 0px 0px 0px; padding: 12px 12px 12px 12px">ADMIN REGISTER</button>
                      </div>
                    </a>
                  </div>
                <?php endif; ?>
                    <div class="col-lg-6">
                    <a href="<?= base_url().'welcome/login'?>">
                      <div class="d-grid mb-2">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="button" style="margin: 6px 0px 0px 0px; padding: 12px 12px 12px 12px">ADMIN LOGIN</button>
                      </div>
                    </a>
                  </div>
								</div>
						</div>
				</div>
		</div>
<?php $this->load->view("templates/footer"); ?>
