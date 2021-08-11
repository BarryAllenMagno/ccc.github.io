<?php $this->load->view("templates/userHeader"); ?>
  <br>
    <div class="container">
        <h3>CO-ADMIN DASHBOARD</h3>
        <hr>

        <div class="col-md-12" style="text-align: center">
          <?php  if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-danger text-center" >
          <?php echo $_SESSION['message']; ?>
        </div>
          <?php
          }  ?>
    </div>

        <?php $username = $this->session->userdata('username'); ?>
        <h5>Welcome <?php echo $username;?>!</h5>
        <hr download style="visibility: hidden">
<!-- <?php echo anchor("users/coAdminAddStudent", "ADD STUDENT", ['class' => 'btn btn-primary']); ?> -->
      <hr download style="visibility: hidden">
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">College Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course</th>
                </tr>
            </thead>
            <tbody>
              <?php if(count($students)): ?>
                  <?php foreach($students as $student): ?>
                <tr class="">
                    <td><?php echo $student->id; ?></td>
                    <td><?php echo $student->studentname; ?></td>
                    <td><?php echo $student->collegename; ?></td>
                    <td><?php echo $student->gender; ?></td>
                    <td><?php echo $student->email; ?></td>
                    <td><?php echo $student->course; ?></td>

                </tr>
                  <?php endforeach; ?>
              <?php else: ?>
                <td>No records found!</td>
              <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<br>

<?php $this->load->view("templates/footer"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(".delete").click(function(){

      var delete_id = $(this).attr('id');

      var bool = confirm('Are you sure you want to delete this blog forever?');
      console.log(bool);

      if (bool){

        $.ajax({
            url:'<?= base_url().'admin/deleteStudent/'?>' +delete_id,
            type:'post',
            data:{'delete_id': delete_id},
            success: function(response){
              console.log(response);
              if (response == "deleted"){
                location.reload();
              }else if (response == "notdeleted"){
                alert("Something went wrong!");
              }
            }
        });
      }else{

      }
    });

</script>
