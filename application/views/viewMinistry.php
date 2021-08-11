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
      <div class="alert alert-success text-left col-md-3" >
        <?php echo $_SESSION['message']; ?>
      </div>
        <?php
        }  ?>
      </div>
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
                    <th scope="col">No.</th>
                    <th scope="col">List of Ministries</th>
                </tr>
            </thead>
            <tbody>
              <?php if(count($ministries)): ?>
                  <?php foreach($ministries as $ministry): ?>
                <tr class="">
                    <td><?php echo $ministry->min_id; ?></td>
                    <td><?php echo $ministry->ministry; ?></td>
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

<?php $this->load->view("templates/footer"); ?>
