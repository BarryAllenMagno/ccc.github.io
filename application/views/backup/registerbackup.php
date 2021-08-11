<?php $this->load->view("templates/Header"); ?>
    <br>
    <div class="container">
      <?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']); ?>

        <h3>ADMIN REGISTRATION</h3>
        <hr>
          <div class="row">
              <div class="col-md-5">
                <?php  if (isset($_SESSION['message'])) { ?>
              <div class="alert alert-success">
                <?php echo $_SESSION['message']; ?>
              </div>
                <?php
                }  ?>
              </div>
          </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-3 control-label">Username</label>
                      <div class="col-md-9">
                          <input class="form-control" name="username" id="username" type="text" value="<?php echo set_value('username') ?>" placeholder="Enter username" required>
                        <?php echo form_error('username','<div class="text-danger">','</div>'); ?>
                    </div>
                </div>
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
           </div>

           <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class="col-md-3 control-label">Gender</label>
                          <select class="col-lg-9" name="gender" id="gender">
                            <option value="none" selected disabled hidden>--Select Option--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                          <?php echo form_error('gender','<div class="text-danger">','</div>'); ?>
                  </div>
              </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                   <div class="form-group">
                       <label class="col-md-3 control-label">Role</label>
                           <select class="col-lg-9" name="role_id">
                             <option value="none" selected disabled hidden>--Select Option--</option>
                           <?php if (count($roles)):?>
                             <?php foreach($roles as $role):?>
                             <option value=<?php echo $role->role_id?>><?php echo $role->rolename?></option>
                              <?php endforeach; ?>
                           <?php endif; ?>
                           </select>
                           <?php echo form_error('role_id','<div class="text-danger">','</div>'); ?>
                   </div>
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
              </div>

              <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <label class="col-md-4 control-label">Confirm Password</label>
                         <div class="col-md-9">
                             <input class="form-control" name="confpwd" id="confpwd" type="password" placeholder="Confirm Password" required>
                             <?php echo form_error('confpwd','<div class="text-danger">','</div>'); ?>
                         </div>
                     </div>
                 </div>
               </div>

                 <button type="submit" class="btn btn-primary" style="margin: 0px 0px 0px 15.4px">REGISTER</button>
                 <?php echo anchor("welcome", "CANCEL",['class'=>'btn btn-primary']);?>

                 <div class="col-md-6">
                    <a href="<?= base_url().'welcome/login'?>">Already have an account?</a>
                 </div>
    </div>
    <br>
        <?php echo form_close();?>

<?php $this->load->view("templates/footer"); ?>
