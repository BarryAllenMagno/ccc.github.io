<?php $this->load->view("templates/userHeader"); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    /*Profile Pic Start*/
    .picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
    }
    .picture{
    width: 120px;
    height: 120px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    }
    .picture:hover{
    border-color: #2ca8ff;
    }
    .content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
    }
    .content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
    }
    .content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
    }
    .content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
    }
    .picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
    }

    .picture-src{
    width: 100%;

    }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <?php echo form_open_multipart("admin/modifyMember/{$memberData->member_id}", ['class' => 'form-horizontal']); ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5" style="background: #ffe6cc">
              <h5 class="card-title text-center mb-5 fw-regular fs-5">EDIT MEMBER</h5>
              <form>
                <div class="row">
                    <div class="col-md-12">
                      <?php  if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-success text-center" id="success-alert" >
                      <?php echo $_SESSION['message']; ?>
                    </div>
                      <?php
                      }  ?>
                </div>
                </div>

                <div class="container">
                    <div class="picture-container">
                      <div class="picture">
                        <img src="<?php echo base_url('assets/upload/profile/'.$memberData->image)?>" class="picture-src" id="wizardPicturePreview" alt="No Image">

                        <input type="file" id="wizard-picture" class="" name="profileimage" value="">
                      </div>
                      <h6 class="">Choose Picture</h6>

                    </div>
                  </div>
                  <br>
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


                  <div class="d-grid mb-2">
                    <a href="<?php echo site_url('admin/dashboard') ?>" class="btn btn-secondary text-uppercase fw-bold" onclick="return confirm('Cancel editing <?php echo $memberData->name; ?>?')" style="margin: 6px 0px 0px 0px">Cancel</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<?php echo form_close();?>
<?php $this->load->view("templates/footer"); ?>

<script type="text/javascript">
  $(document).ready(function(){
  // Prepare the preview for profile picture
      $("#wizard-picture").change(function(){
          readURL(this);
      });
  });
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $(document).ready(function() {
  $("#success-alert").hide();
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
    });
  
});


</script>
