<?php $this->load->view("templates/userHeader"); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <br>
    <div class="container">
        <h3>MEMBERS</h3>
        <hr>
        <br>

      <hr download style="visibility: hidden">
        <label style="#2196F3"><i class="fa fa-search"></i></label>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

    <div class="row">
        <table class="table table-hover" id="myTable">
            <thead>
                <tr>
                    <!-- <th scope="col">Image</th> -->
                    <th scope="col">Name</th>
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
              <?php if(count($members)): ?>
                  <?php foreach($members as $member): ?>
                <tr>
                    <!-- <td><img src="<?php echo base_url('assets/upload/profile/'.$member->image) ?>" width="50px" class="rounded"></td> -->
                    <td><?php echo $member->name; ?></td>
                    <td><?php echo $member->ministry; ?></td>
                    <td><?php echo $member->gender; ?></td>
                    <td><?php echo $member->birthday; ?></td>
                    <td><?php echo $member->age; ?></td>
                    <td><?php echo $member->address; ?></td>
                    <td><?php echo $member->contact; ?></td>
                    <td>
                      <a href="<?php echo site_url('admin/viewProfile/'.$member->member_id) ?>" class="btn btn-outline-success"><i class="fa fa-eye"></i></a>
                      <a href="<?php echo site_url('admin/editMember/'.$member->member_id) ?>" class="btn btn-outline-info"><i class="fa fa-edit"></i></a>
                      <a href="<?php echo site_url('admin/deleteMember/'.$member->member_id) ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete member <?php echo $member->name; ?>?')"><i class="fa fa-trash"></i></a>
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


<?php $this->load->view("templates/footer"); ?>

<script>  //script for search filter
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0,1];
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
