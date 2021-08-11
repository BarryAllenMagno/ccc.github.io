<?php $this->load->view("templates/userHeader"); ?>
<br>
<div class="container">
  <?php echo form_open("admin/createCollege", ['class' => 'form-horizontal']); ?>

    <h3>ADD COLLEGE</h3>
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
                 <label class="col-md-3 control-label">College Name</label>
                 <div class="col-md-9">
                     <input class="form-control" name="collegename" id="collegename" type="text" value="<?php echo set_value('collegename') ?>" placeholder="Enter college name" required>
                     <?php echo form_error('collegename','<div class="text-danger">','</div>'); ?>
                 </div>
             </div>
         </div>
         <div class="col-md-6">

         </div>
       </div>

         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-3 control-label">Branch</label>
                    <div class="col-md-9">
                        <input class="form-control" name="branch" id="branch" type="text" placeholder="Enter branch" required>
                        <?php echo form_error('branch','<div class="text-danger">','</div>'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
          </div>
             <button type="submit" class="btn btn-primary" style="margin: 4px 0px 0px 15.4px;">ADD</button>
             <?php echo anchor("admin/dashboard", "CANCEL",['class'=>'btn btn-primary','style' => ('margin:4px 0px 0px 3px')]);?>
    </div>
    <?php echo form_close();?>

<?php $this->load->view("templates/footer"); ?>
