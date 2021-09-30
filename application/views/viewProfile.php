<?php $this->load->view("templates/userHeader"); ?>

    <style>
    /*Profile Pic Start*/
.picture-container{
  position: relative;
  cursor: pointer;
  text-align: center;
}
.picture{
  width: 200px;
  height: 200px;
  background-color: #999999;
  border: 4px solid #CCCCCC;
  color: #FFFFFF;
  border-radius: 50%;
  margin: 0px auto;
  overflow: hidden;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}
.picture:hover{
  border-color: #2ca8ff;
}
.content.ct-wizard-green .picture:hover{
  border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
  border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
  border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
  border-color: #ff3b30;
}
.picture input[type="file"] {
  cursor: pointer;
  display: block;
  height: 100%;
  left: 0;
  opacity: 0 !important;
  position: absolute;
  top: 0;
  width: 100%;
}

.picture-src{
  width: 100%;

}
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5" style="background: #ffe6cc">
              <h5 class="card-title text-center mb-5 fw-regular fs-5">PROFILE</h5>

              <div class="container">
                <div class="picture-container">
                      <div class="picture">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="<?php echo base_url('assets/upload/profile/'.$memberData->image)?>" width="10px" alt="No Image">
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>
                    <div class="">
                    <strong>Name: </strong><label class="" name="name"> <?php echo set_value('name', $memberData -> name);?></label>
                    </div>

                    <div class="">
                      <strong>Ministry: </strong><label class=""> <?php echo $memberData -> ministry; ?></label>
                    </div>

                    <div class="">
                      <strong>Gender: </strong><label class=""> <?php echo $memberData -> gender?></label>
                    </div>

                    <div class="">
                      <strong>Birthday: </strong><label class=""><?php echo set_value('birthday', $memberData -> birthday) ?></label>
                    </div>

                    <div class="">
                      <strong>Age: </strong><label class=""><?php echo set_value('age', $memberData -> age) ?></label>
                    </div>

                    <div class="">
                      <strong>Address: </strong><label class=""><?php echo set_value('address', $memberData -> address) ?></label>
                    </div>

                    <div class="">
                      <strong>Contact: </strong><label class=""><?php echo ($memberData -> contact) ?></label>
                    </div>

                    <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<?php echo form_close();?>
<?php $this->load->view("templates/footer"); ?>

<script type="text/javascript">
    $(document).ready(function(){
    // Prepare the preview for profile picture
        $("#wizard-picture").change(function(){
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
