<?php $this->load->view("templates/userHeader"); ?>
<style>
#left
form { display: flex; }
input[type=text] { flex-grow: 1; }
</style>

  <br>
    <div class="container">
        <h3>MINISTRIES</h3>
        <hr>

        <?php $username = $this->session->userdata('username'); ?>
        <h5>Welcome <?php echo $username;?>!</h5>
        <br>
        <div class="">


        <?php  if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-success text-left col-md-3" id="success-alert">
        <?php echo $_SESSION['message']; ?>
      </div>
        <?php
        }  ?>

        
      
      
        <?php echo form_open("admin/createMinistry", ['class' => 'form-horizontal']); ?>
        <!-- <form> -->
          <?php echo form_error('ministry','<div class="text-danger">','</div>'); ?>
          <input class="" type="text" placeholder="Enter ministry" name="ministry" required>

          <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">ADD</button>
        <!-- </form> -->
        <?php echo form_close();?>
        <br>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">List of Ministries</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php if($ministries): ?>
                  <?php foreach($ministries as $ministry): ?>
                <tr class="">
                    <td><?php echo $ministry->ministry; ?></td>
                    <td><a href="<?php echo site_url('admin/deleteMinistry/'.$ministry->min_id) ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete <?php echo $ministry->ministry;?> ministry?')"><i class="fa fa-trash"></i></a></td>
                </tr>
                  <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td>No records found!</td>
                </tr>
              <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
  $("#success-alert").hide();
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
    });
  
});
</script>

<?php $this->load->view("templates/footer"); ?>
