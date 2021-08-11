<?php $this->load->view("templates/userHeader"); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <?php echo form_open("admin/createLeader", ['class' => 'form-horizontal']); ?>
    <div class="container">
      <!-- <h2 class="text-center fw-regular fs-10">ADMIN LOGIN</h2> -->
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-regular fs-5">ADD LEADER</h5>
            <form>
              <div class="row">
                  <div class="col-md-12">
                    <?php  if (isset($_SESSION['message'])) { ?>
                  <div class="alert alert-success text-center" >
                    <?php echo $_SESSION['message']; ?>
                  </div>
                    <?php
                    }  ?>
              </div>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control" name="name" id="floatingInput" type="text" value="<?php echo set_value('name') ?>" placeholder="Full Name" autofocus="autofocus" required>
                <?php echo form_error('name','<div class="text-danger">','</div>'); ?>
                <label for="floatingInput">Full Name</label>
              </div>

              <div class="form-floating mb-3">
                    <select class="col-lg-12" name="min_id">
                      <option value="none" selected disabled >-- Ministry --</option>
                    <?php if (count($ministries)):?>
                      <?php foreach($ministries as $ministryy):?>
                      <option value=<?php echo $ministryy->min_id?>><?php echo $ministryy->ministry?></option>
                       <?php endforeach; ?>
                    <?php endif; ?>
                    </select>
                    <?php echo form_error('min_id','<div class="text-danger">','</div>'); ?>
              </div>

              <div class="form-floating mb-3">
                <select class="col-lg-12" name="gender" id="gender">
                  <option value="none"selected disabled>-- Gender --</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                  <?php echo form_error('gender','<div class="text-danger">','</div>'); ?>
              </div>

              <div class="form-floating mb-3">
                <input type="date" id="birthday" name="birthday" class="form-control" id="floatingInput">
                <label for="floatingBirthday">Birthday</label>
              </div>

              <div class="form-floating mb-3">
                <input class="form-control" name="age" id="floatingInput" type="number" placeholder="Age" value="<?php echo set_value('age') ?>" required>
                <?php echo form_error('age','<div class="text-danger">','</div>'); ?>
                <label for="floatingAddress">Age</label>
              </div>

              <div class="form-floating mb-3">
                <input class="form-control" name="address" id="floatingInput" type="text" placeholder="Address" value="<?php echo set_value('address') ?>" required>
                <?php echo form_error('address','<div class="text-danger">','</div>'); ?>
                <label for="floatingAddress">Address</label>
              </div>

              <div class="form-floating mb-3">
                <input class="form-control" name="contact" id="floatingInput" type="tel" placeholder="Contact Number" value="<?php echo set_value('contact') ?>"  required>
                <?php echo form_error('contact','<div class="text-danger">','</div>'); ?>
                <label for="floatingContact">Contact Number</label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">ADD</button>
              </div>

              <a href=<?= base_url().'admin/dashboard'?>>
                <div class="d-grid mb-2">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="button" style="margin: 6px 0px 0px 0px">Cancel</button>
                </div>
              </a>
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
