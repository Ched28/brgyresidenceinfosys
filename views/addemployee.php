<?php 


?>
<div class="container-fluid scroll-container">
<div class="header">
    <div>
<h1>ADD RESIDENT </h1>
</div>
<div>

</div>
</div>
<div class="container p-0 m-3">

<?php $form = \app\core\form\Form::begin('', 'post')?>

    <fieldset>
    <legend>Personal Information</legend>
    <hr>
    <div class="row">
    <div class="col-lg-6">

    <?php echo $form->field($model, 'emplastname', 'Last Name' ) ?>
    <?php echo $form->field($model, 'empfirstname', 'First Name') ?>
    <?php echo $form->field($model, 'empmiddlename','Middle Name') ?>
    </div>
    <div class="col-lg-6">
    <?php echo $form->field($model, 'empsuffix', 'Suffix') ?>
    <?php echo $form->field($model, 'empbirthday', 'Birthday')->typeDate() ?>
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
    <?php echo $form->field($model, 'empcontactNo1','Contact Number 1')->numberField() ?>
    <?php echo $form->field($model, 'empcontactNo1', 'Contact Number 2')->numberField() ?>
    </div>
    <div class="col-lg-6">
    <?php echo $form->field($model, 'emailadd', 'Email Address')->emailField() ?>
    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <fieldset>
    <legend>Account Information</legend>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <?php echo $form->field($model, 'empusername', 'Username') ?>
            <?php echo $form->field($model, 'emppassword', 'Password') ?>

    </div>



    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <hr>
    <div class="row">
        <div class="col-lg-6 d-flex">
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-qrcode"></i> &nbsp;&nbsp; Generate QR Code </button> &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-signature"></i> &nbsp;&nbsp; Add Signature </button> &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="confirm-btn btn btn-primary"> <i class="fa-solid fa-check"></i> &nbsp;&nbsp; Confirm Data </button>
        </div>
    </div>
    <br>
    <br>
  <input type="submit" class="btn btn-primary">Submit</input>
<?php echo \app\core\form\Form::end()?>

