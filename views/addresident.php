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
    <fieldset>
        <legend>Generate QR Code</legend>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <button type="button" class="btn btn-warning"> <i class="fa-solid fa-qrcode"></i> &nbsp;&nbsp; Generate QR Code </button> &nbsp;&nbsp;&nbsp;&nbsp;

        </div>

    </div>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>Add Signature</legend>
        <hr>
    <div class="row">
    <div class="col-md-12">

            <label class="" for="">Signature:</label>
            <br/>
            <div id="sig"></div>
            <br/>
            <button id="clear" class="btn btn-danger"><i class="fa-solid fa-signature"></i> Clear Signature</button>
            <textarea id="signature64" name="signed" style="display: none"></textarea>

    </div>
    </div>
        <br>
        <br>
    <fieldset>
       <legend>Confirm Data</legend>
       <hr>
    <div class="row">
         <div class="col-lg-6">
             <div class="confirm-text">
                 By This Confirmation, You verify that is information and facts of this Resident is all true.
                 <br>
                 <br>
                 To certify this, please type your password.
                 <br>

                 <input type="password" class="form-control user-input-field" placeholder=" &nbsp;&nbsp; Confirm Data">
                 <br>
                 <br>
             </div>

         </div>
    </div>
    </fieldset>
    <br>
    <br>
    <button type="submit" class="btn btn-success pt-2 pb-2"><i class="fa-solid fa-floppy-disk"></i>  &nbsp;&nbsp; Submit </button>
        <script type="text/javascript">
            var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
            $('#clear').click(function(e) {
                e.preventDefault();
                sig.signature('clear');
                $("#signature64").val('');
            });
        </script>
<?php echo \app\core\form\Form::end()?>

