<?php $this->load->view("templates/userHeader"); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <br>
    <div class="container">
        <h3>ADMIN DASHBOARD</h3>
        <hr>

      <div class="col-md-12" style="text-align: center">
          <?php  if (isset($_SESSION['message'])) { ?>
          <div class="alert alert-success text-center" id="success-alert" >
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
          <a href="<?php echo site_url('admin/addLeader/') ?>" class="btn btn-success"><i class="fa fa-user-plus"></i> ADD LEADER</a>
          <a href="<?php echo site_url('admin/addMember/') ?>" class="btn btn-success"><i class="fa fa-user-plus"></i> ADD MEMBER</a>
          <a href="<?php echo site_url('admin/addMinistry/') ?>" class="btn btn-success"><i class="fa fa-eye"></i> VIEW MINISTRY</a>
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
                    <td class="">
                      <a href="<?php echo site_url('admin/viewMembers/'.$leader->min_id) ?>" class="btn btn-outline-info"><i class="fa fa-users"></i> VIEW MEMBER</a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php $this->load->view("templates/footer"); ?>

<script> //script for search filter
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

$(document).ready(function() {
  $("#success-alert").hide();
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
    });
  
});
</script>
