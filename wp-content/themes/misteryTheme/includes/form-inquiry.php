<h4>Send Inquiry  <?php the_title(); ?></h4>

<form class="row g-3 needs-validation" id="formsubmit" novalidate>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" name="fname" class="form-control" id="validationCustom01"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" name="lname" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">

      <input type="email" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required>

      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" name="city" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" name="zipcode" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>


<script>



(function($){
    $('#formsubmit').submit( function(event){
            event.preventDefault();
            var endpoint = '<?php echo admin_url('admin-ajax.php');?>';

            var form = $('#formsubmit').serialize();

            var formdata = new FormData;

            formdata.append('action', 'formsubmit');
            formdata.append('formsubmit',form);


            $.ajax(endpoint, {
                    type:'POST',
                    data:formdata,
                    processData: false,
                    contentType: false,


                    success: function(res)
                    {
                            alert(res.data);
                    },
                    error: function(err){

                    }
                })



        })

})(jQuery)

</script>