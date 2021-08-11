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
                    <th scope="col">Name</th>
                    <th scope="col">Ministry</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                    <!-- <?php
                        $college_id = $this->session->userdata('college_id');
                     ?>
                     <?php if($college_id == '0'): ?> -->
                    <th scope="col">Action</th>
                  <!-- <?php else: ?>
                    <?php endif; ?> -->
                </tr>
            </thead>
            <tbody>
              <?php if(count($members)): ?>
                  <?php foreach($members as $member): ?>
                <tr class="">
                    <td><?php echo $member->name; ?></td>
                    <td><?php echo $member->ministry; ?></td>
                    <td><?php echo $member->gender; ?></td>
                    <td><?php echo $member->birthday; ?></td>
                    <td><?php echo $member->age; ?></td>
                    <td><?php echo $member->address; ?></td>
                    <td><?php echo $member->contact; ?></td>
                    <td>
                      <?php echo anchor("admin/editMember/{$member->member_id}", "EDIT", ['class' => 'btn btn-outline-primary']); ?>

                      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">DELETE</button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                  </div>

                                    <div class="modal-body">
                                      Are you sure you want to delete member?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                                      <a href="<?php echo site_url('admin/deleteMember/'.$member->member_id) ?>" class="btn btn-danger">DELETE</a>
                                    </div>
                                  </div>
                              </div>
                      </div>
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
