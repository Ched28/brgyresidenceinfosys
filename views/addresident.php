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

    <?php echo $form->field($model, 'lastname', 'Last Name' ) ?>
    <?php echo $form->field($model, 'firstname', 'First Name') ?>
    <?php echo $form->field($model, 'middlename','Middle Name') ?>
    </div>
    <div class="col-lg-6">
    <?php echo $form->field($model, 'suffix', 'Suffix') ?>
    <?php echo $form->field($model, 'birthday', 'Birthday')->typeDate() ?>
    <?php echo $form->field($model, 'birthplace', 'Birth Place') ?>
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
    <?php echo $form->field($model, 'contact1','Contact Number 1')->numberField() ?>
    <?php echo $form->field($model, 'contact2', 'Contact Number 2')->numberField() ?>
    </div>
    <div class="col-lg-6">
    <?php echo $form->field($model, 'telno', 'Telephone Number')->numberField()?>
    <?php echo $form->field($model, 'emailadd', 'Email Address')->emailField() ?>
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
            <select name="gender"  value="<?php echo $model->gender ?>" class="custom-select w-100 pt-2 pb-2" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="civilstatus">Civil Status </label>
            <select name="civilstatus" class="custom-select w-100 pt-2 pb-2" required>
                <option value="single">Single</option>
                <option value="married">Married</option>
            </select>
        </div>
    <?php echo $form->field($model, 'province', 'province') ?>
    </div>
    <div class="col-lg-6">
    <?php echo $form->field($model, 'religion', 'religion') ?>
    <?php echo $form->field($model, 'nationality', 'nationality') ?>


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

