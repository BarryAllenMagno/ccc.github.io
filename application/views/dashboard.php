<?php $this->load->view("templates/userHeader"); ?>
<!-- <style>
* {
  box-sizing: border-box;
}

#myInput {

  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <br>
    <div class="container">
        <h3>ADMIN DASHBOARD</h3>
        <hr>

        <div class="col-md-12" style="text-align: center">
          <?php  if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-success text-center" >
          <?php echo $_SESSION['message']; ?>
        </div>
          <?php
          }  ?>
    </div>
        <?php $username = $this->session->userdata('username'); ?>
        <h5>Welcome <?php echo $username;?>!</h5>
        <br>
        <?php
            $user_id = $this->session->userdata('user_id');
         ?>
         <?php if($user_id == '1'): ?>

          <?php echo anchor("admin/addLeader", "ADD LEADER", ['class' => 'btn btn-primary']); ?>
          <?php echo anchor("admin/addMember", "ADD MEMBER", ['class' => 'btn btn-primary']); ?>
          <?php echo anchor("admin/addMinistry", "VIEW MINISTRY", ['class' => 'btn btn-primary']); ?>

        <?php else: ?>
          <?php endif; ?>

      <hr download style="visibility: hidden">
      <h5>CCC LEADERS</h5>
      <label style="#2196F3"><i class="fa fa-search"></i></label>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

    <div class="row">
        <table class="table table-hover" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Leader</th>
                    <th scope="col">Ministry</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php if(count($leaders)): ?>
                  <?php foreach($leaders as $leader): ?>
                <tr class="">
                    <td><?php echo $leader->name; ?></td>
                    <td><?php echo $leader->ministry; ?></td>
                    <td><?php echo $leader->gender; ?></td>
                    <td><?php echo $leader->birthday; ?></td>
                    <td><?php echo $leader->age; ?></td>
                    <td><?php echo $leader->address; ?></td>
                    <td><?php echo $leader->contact; ?></td>
                    <td>
                      <?php echo anchor("admin/viewMembers/{$leader->min_id}", "VIEW MEMBER", ['class' => 'btn btn-outline-success', 'style' =>  '']); ?>

                    </td>
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

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<?php $this->load->view("templates/footer"); ?>
