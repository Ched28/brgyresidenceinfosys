<?php 


?>
<div class="container-fluid">
<div class="header">
    <div>
<h1>ADD RESIDENT </h1>
</div>
<div>
<p>TRANSACTION ID : 568943DFD45903ER043010304 </p>
<p>Barangay ID : BSB-1234 </p>
</div>
</div>
<div class="container p-0 m-3">

<?php $form = \app\core\form\Form::begin('', "post");?>

    <fieldset>
    <legend>Personal Information</legend>
    <hr>
    <div class="row">
    <div class="col-lg-6">
    <?php echo $form->field($model, 'lastname') ?>
    <?php echo $form->field($model, 'firstname') ?>
    <?php echo $form->field($model, 'middlename') ?>
    </div>
    <div class="col-lg-6">
    <?php echo $form->field($model, 'suffix') ?>
    <?php echo $form->field($model, 'birthday') ?>
    <?php echo $form->field($model, 'birthplace') ?>
    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <fieldset>
    <legend>Contact Information</legend>
    <hr>
    <div class="row">
    <div class="col-lg-6">
    <?php echo $form->field($model, 'contact1') ?>
    <?php echo $form->field($model, 'contact2') ?>
    </div>
    <div class="col-lg-6">
    <?php echo $form->field($model, 'telno') ?>
    <?php echo $form->field($model, 'emailadd') ?>
    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <fieldset>
    <legend>Another Information</legend>
    <hr>
    <div class="row">
    <div class="col-lg-6">
    <?php echo $form->field($model, 'gender') ?>
    <?php echo $form->field($model, 'civilstatus') ?>
    <?php echo $form->field($model, 'province') ?>
    </div>
    <div class="col-lg-6">
    <?php echo $form->field($model, 'religion') ?>
    <?php echo $form->field($model, 'nationality') ?>
    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <hr>
    <div class="row">
        <div class="col-lg-6 d-flex">
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-qrcode"></i> &nbsp;&nbsp; Generate QR Code </button>
        </div>
    </div>
    <br>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo \app\core\form\Form::end();?>
    
    <!-- <form action="" method="post">
    <fieldset>
    <legend>Personal Information</legend>
    <hr>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
    <label for="lastname">Last Name </label>
    <input type="text" class="form-control user-input-field" name="lastname" placeholder="Enter Last Name">   
    </div>
    <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control user-input-field" name="firstname" placeholder="Enter First Name">   
    </div>
    <div class="form-group">
    <label for="middlename">Middle Name</label>
    <input type="text" class="form-control user-input-field" name="middlename" placeholder="Enter Middle Name">   
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
    <label for="suffix">Suffix </label>
    <input type="text" class="form-control user-input-field" name="suffix" placeholder="Suffix">   
    </div>
    <div class="form-group">
    <label for="birthday">Birthday</label>
    <input type="date" class="form-control user-input-field" name="birthday" placeholder="mm/dd/yyyy">   
    </div>
    <div class="form-group">
    <label for="birthplace">Birthplace</label>
    <input type="text" class="form-control user-input-field" name="birthplace" placeholder="Birthplace">   
    </div>
    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <fieldset>
    <legend>Contact Information</legend>
    <hr>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
    <label for="contact1">Contact Number 1 </label>
    <input type="text" class="form-control user-input-field" name="contact1" placeholder="Contact Number 1">   
    </div>
    <div class="form-group">
    <label for="contact2">Contact Number 2</label>
    <input type="text" class="form-control user-input-field" name="contact2" placeholder="Contact Number 2">   
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
    <label for="telno">Telephone Number </label>
    <input type="text" class="form-control user-input-field" name="telno" placeholder="Tel No">   
    </div>
    <div class="form-group">
    <label for="emailadd">Email Address </label>
    <input type="email" class="form-control user-input-field" name="emailadd" placeholder="sample@email.com">   
    </div>
    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <fieldset>
    <legend>Another Information</legend>
    <hr>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
    <label for="gender">Gender </label>
    <select name="gender" class="custom-select w-100 pt-2 pb-2">
    <option selected>Select Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    </select>  
    </div>
    <div class="form-group">
    <label for="civilstatus">Civil Status </label>
    <select name="civilstatus" class="custom-select w-100 pt-2 pb-2">
    <option selected>Select Civil Status</option>
    <option value="single">Single</option>
    <option value="married">Married</option>
    </select>    
    </div>
    <div class="form-group">
    <label for="province">Province </label>
    <input type="text" class="form-control user-input-field" name="province" placeholder="Province">   
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
    <label for="religion">Religion </label>
    <input type="text" class="form-control user-input-field" name="religion" placeholder="Religion">   
    </div>
    <div class="form-group">
    <label for="nationality">Nationality </label>
    <input type="text" class="form-control user-input-field" name="nationality" placeholder="Nationality">   
    </div>
    
    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <hr>
    <div class="row">
        <div class="col-lg-6 d-flex">
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-qrcode"></i> &nbsp;&nbsp; Generate QR Code </button>
        </div>
    </div>
    <br>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div> -->
