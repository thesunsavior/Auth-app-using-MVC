<?php

/** @var $model \thecodeholic\phpmvc\Model */

use thecodeholic\phpmvc\form\Form;

$form = new Form();
?>

<div class="login-wrapper" style='display:flex; width:100vw;height:100vh'>
    <div class="left-login" style='width:44%;padding:32px 16px'>
        <center>
            <img src="media/logo.jpg">

            <br>
            <br>

            <h2>Register</h2>
            <p>Welcome! Register to start working.</p>
        </center>
        <hr>

        <br>

        <?php $form = Form::begin('', 'post') ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field($model, 'firstname', 'text') ?>
            </div>
            <div class="col">
                <?php echo $form->field($model, 'lastname', 'text') ?>
            </div>
        </div>
        <?php echo $form->field($model, 'email', 'text') ?>
        <?php echo $form->field($model, 'password', 'text')->passwordField() ?>
        <?php echo $form->field($model, 'passwordConfirm', 'text')->passwordField() ?>

        <br>

        <center>
            <button class="btn btn-success">Register to start working</button>
        </center>
        <?php Form::end() ?>


    </div>
    <div style="width:56%;height:100%;object-fit:contain;background-position: center;
  background-repeat: no-repeat;
  background-size: cover;  background-image: url(' media/background.jpg');">

    </div>`


</div>