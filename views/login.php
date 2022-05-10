<?php
use app\models;
use app\core\form\Form;
?>

<div class="container-fluid p-0 banner">
        <div class="row m-0">
            <div class="col-lg-7">
                <div class="title-text">
                    <h1>
                        RESIDENCES <br>INFORMATON<br> SYSTEM
                    </h1>
                </div>
            </div>
            <div class="col-lg-5 p-0">
                <div class="login-container">
                    <div class="form-container">
                        <h1>LOG IN </h1>

                        <?php

                        $form = Form::begin('', 'post')?>
                        <?php echo $form->field($model, 'empusername', 'Username' ) ?>
                        <?php echo $form->field($model, 'emppassword', 'Password' )->passwordField() ?>
                            <button class="btn-signIn mt-4">SIGN IN</button>
                        <?php echo Form::end()?>

                        <i class="fa-solid fa-user fa-7x fa-style"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>
