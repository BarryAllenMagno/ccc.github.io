<?php $this->load->view("templates/header"); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


  <body>
    <?php echo form_open("welcome/signin", ['class' => 'form-horizontal']); ?>
    <div class="container">
      <!-- <h2 class="text-center fw-regular fs-10">ADMIN LOGIN</h2> -->
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-regular fs-5">ADMIN LOGIN</h5>
            <form>
              <div class="row">
                  <div class="col-md-12">
                    <?php  if (isset($_SESSION['message'])) { ?>
                  <div class="alert alert-danger text-center">
                    <?php echo $_SESSION['message']; ?>
                  </div>
                    <?php
                    }  ?>
              </div>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" name="username" id="floatingInput" type="text" value="<?php echo set_value('username')?>" placeholder="Enter email" autofocus="autofocus" required>
                <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" name="password" id="floatingInput" type="password" placeholder="Enter Password" required>
                <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
                <label for="floatingPassword">Password</label>
              </div>

              <!-- <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div> -->
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                  in</button>
              </div>

              <a href=<?= base_url().'welcome'?>>
                <div class="d-grid mb-2">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="button" style="margin: 6px 0px 0px 0px">Cancel</button>
                </div>
              </a>
              <div class="">
                <a href="<?= base_url().'welcome/adminSignup'?>">Don't have an account yet?</a>
              </div>
            </form>
          </div>
        </div>
        <p class="mt-5 mb-3 text-muted">CornerstoneChristianCommunity ©2021</p>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<?php echo form_close();?>
<?php $this->load->view("templates/footer"); ?>
