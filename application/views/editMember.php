<?php $this->load->view("templates/userHeader"); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <?php echo form_open("admin/modifyMember/{$memberData->member_id}", ['class' => 'form-horizontal']); ?>
    <div class="container">
      <!-- <h2 class="text-center fw-regular fs-10">ADMIN LOGIN</h2> -->
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-regular fs-5">EDIT MEMBER</h5>
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
                  <input class="form-control" name="name" id="floatingInput" type="text" value="<?php echo set_value('name', $memberData -> name) ?>" placeholder="Member Name" autofocus="autofocus" required>
                  <?php echo form_error('name','<div class="text-danger">','</div>'); ?>
                  <label for="floatingInput">Full Name</label>
                </div>

                <div class="form-floating mb-3">
                      <select class="col-lg-12" name="min_id">
                        <option value="<?php echo $memberData -> min_id; ?>"><?php echo $memberData -> ministry; ?></option>
                      <?php if (count($ministries)):?>
                        <?php foreach($ministries as $ministryy):?>
                        <option value=<?php echo $ministryy->min_id?>><?php echo $ministryy->ministry?></option>
                         <?php endforeach; ?>
                      <?php endif; ?>
                      </select>
                      <?php echo form_error('ministry','<div class="text-danger">','</div>'); ?>
                </div>

                <div class="form-floating mb-3">
                  <select class="col-lg-12" name="gender" id="gender">
                    <option value="Male"><?php echo $memberData -> gender?></option>
                    <option value="Female">Female</option>
                  </select>
                    <?php echo form_error('gender','<div class="text-danger">','</div>'); ?>
                </div>

                <div class="form-floating mb-3">
                  <input type="date" id="birthday" name="birthday" class="form-control" id="floatingInput" value="<?php echo set_value('birthday', $memberData -> birthday) ?>">
                  <label for="floatingBirthday">Birthday</label>
                </div>

                <div class="form-floating mb-3">
                  <input class="form-control" name="age" id="floatingInput" type="number" value="<?php echo set_value('age', $memberData -> age) ?>" placeholder="Age" required>
                  <?php echo form_error('age','<div class="text-danger">','</div>'); ?>
                  <label for="floatingAddress">Age</label>
                </div>

                <div class="form-floating mb-3">
                  <input class="form-control" name="address" id="floatingInput" type="text" value="<?php echo set_value('address', $memberData -> address) ?>" placeholder="Address" autofocus="" required>
                  <?php echo form_error('address','<div class="text-danger">','</div>'); ?>
                  <label for="floatingInput">Address</label>
                </div>

                <div class="form-floating mb-3">
                  <input class="form-control" name="contact" id="floatingInput" type="tel" value="<?php echo set_value('contact', $memberData -> contact) ?>" placeholder="Contact Number" required>
                  <?php echo form_error('contact','<div class="text-danger">','</div>'); ?>
                  <label for="floatingContact">Contact Number</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">SAVE</button>
                </div>

                <a href=<?= base_url().'admin/dashboard'?>
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



<?php echo form_close();?>
<?php $this->load->view("templates/footer"); ?>
