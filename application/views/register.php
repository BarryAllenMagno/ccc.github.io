<?php $this->load->view("templates/Header"); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


  <body>
    <?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']); ?>
    <div class="container">
      <!-- <h2 class="text-center fw-regular fs-10">ADMIN LOGIN</h2> -->
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-regular fs-5">ADMIN REGISTRATION</h5>
            <form>
              <div class="row">
                  <div class="col-md-12">
                    <?php  if (isset($_SESSION['message'])) { ?>
                  <div class="alert alert-success text-center">
                    <?php echo $_SESSION['message']; ?>
                  </div>
                    <?php
                    }  ?>
              </div>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" name="username" id="floatingInput" type="text" value="<?php echo set_value('username') ?>" placeholder="Username" autofocus="autofocus" required>
                <?php echo form_error('username','<div class="text-danger">','</div>'); ?>
                <label for="floatingInput">Username</label>
              </div>


              <!-- <div class="form-floating mb-3">
                        <select class="col-lg-12" name="role_id">
                          <option value="none" selected disabled hidden>--Select Role--</option>
                        <?php if (count($roles)):?>
                          <?php foreach($roles as $role):?>
                          <option value=<?php echo $role->role_id?>><?php echo $role->rolename?></option>
                           <?php endforeach; ?>
                        <?php endif; ?>
                        </select>
                        <?php echo form_error('role_id','<div class="text-danger">','</div>'); ?>
              </div> -->

              <div class="form-floating mb-3">
                <input class="form-control" name="password" id="floatingInput" type="password" placeholder="Password" required>
                <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" name="confpwd" id="floatingInput" type="password" placeholder="Confirm Password" required>
                <?php echo form_error('confpwd','<div class="text-danger">','</div>'); ?>
                <label for="floatingPassword">Confirm Password</label>
              </div>

              <!-- <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div> -->

              <?php if($chkAdminExist=='1' || $chkAdminExist > '1'): ?>
                <div class="d-grid">
                  <input class="btn btn-primary btn-login text-uppercase fw-bold" type="button" type="submit" value="register" <?php if ($chkAdminExist=='1' || $chkAdminExist > '1'){ ?> disabled <?php   } ?>/>
              <?php else: ?>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">REGISTER</button>
              </div>
              <?php endif;?>

              <a href=<?= base_url().'welcome'?>>
                <div class="d-grid mb-6">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="button" style="margin: 6px 0px 0px 0px">CANCEL</button>
                </div>
              </a>

              <div class="">
                 <a href="<?= base_url().'welcome/login'?>">Already have an account?</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<?php echo form_close();?>
<?php $this->load->view("templates/footer"); ?>
