<?php $this->load->view("templates/userHeader"); ?>
  <br>
    <div class="container">
        <h3>CO-ADMINS</h3>
        <hr>

        <?php $username = $this->session->userdata('username'); ?>
        <h5>Welcome <?php echo $username;?>!</h5>
        <br>

      <hr download style="visibility: hidden">
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">College Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php if(count($coadmins)): ?>
                  <?php foreach($coadmins as $coadmin): ?>
                <tr class="">
                    <td><?php echo $coadmin->user_id; ?></td>
                    <td><?php echo $coadmin->username; ?></td>
                    <td><?php echo $coadmin->collegename; ?></td>
                    <td><?php echo $coadmin->gender; ?></td>
                    <td><?php echo $coadmin->email; ?></td>
                    <td>
                      <!-- <?php echo anchor("admin/editCoadmin/{$coadmin->user_id}", "EDIT", ['class' => 'btn btn-primary']); ?> -->
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">DELETE</button>

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
                            Are you sure you want to delete Co-admin <strong><?php echo $coadmin->username; ?></strong>?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                            <a href="<?php echo site_url('admin/deleteCoadmin/'.$coadmin->user_id) ?>" class="btn btn-danger">DELETE</a>
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

<?php $this->load->view("templates/footer"); ?>
