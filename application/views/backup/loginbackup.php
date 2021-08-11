<?php $this->load->view("templates/header"); ?>
    <br>
    <div class="container">
      <?php echo form_open("welcome/signin", ['class' => 'form-horizontal']); ?>

        <h3>ADMIN LOGIN</h3>
        <hr>
          <div class="row">
              <div class="col-md-5">
                <?php  if (isset($_SESSION['message'])) { ?>
              <div class="alert alert-danger">
                <?php echo $_SESSION['message']; ?>
              </div>
                <?php
                }  ?>
          </div>
          </div>

          <div class="row">
             <div class="col-md-6">
                 <div class="form-group">
                     <label class="col-md-3 control-label">Email</label>
                     <div class="col-md-9">
                         <input class="form-control" name="email" id="username" type="email" value="<?php echo set_value('email') ?>" placeholder="Enter email" required>
                         <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
                     </div>
                 </div>
             </div>
             <div class="col-md-6">

             </div>
           </div>

             <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input class="form-control" name="password" id="password" type="password" placeholder="Enter Password" required>
                            <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
              </div>

                 <button type="submit" class="btn btn-primary" style="margin: 0px 0px 0px 15.4px">LOGIN</button>
                 <?php echo anchor("welcome", "CANCEL",['class'=>'btn btn-primary','style' => ('margin:0px 0px 0px 3px')]);?>
                 <div class="col-md-6">
                   <a href="<?= base_url().'welcome/adminSignup'?>">Don't have an account yet?</a>
                 </div>
        </div>
        <?php echo form_close();?>

<?php $this->load->view("templates/footer"); ?>
