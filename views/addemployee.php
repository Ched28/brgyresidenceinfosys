<?php

/**
 * @var AddEmployee $model;
 **/

?>
<div class="container-fluid scroll-container">
<div class="header">
    <div>
<h1>ADD EMPLOYEE </h1>
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
    <?php echo $form->field($model, 'empcontactNo2', 'Contact Number 2')->numberField() ?>
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
            <?php echo $form->field($model, 'emppassword', 'Password')->passwordField() ?>

    </div>



    </div>
    </div>
    </fieldset>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <button type="submit" class="btn btn-success pt-2 pb-2"><i class="fa-solid fa-floppy-disk"></i>  &nbsp;&nbsp; Submit </button>
<?php echo \app\core\form\Form::end()?>

