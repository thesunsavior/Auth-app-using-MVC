<?php

/** @var $model \app\models\LoginForm */

use app\core\form\Form;

?>

<div class="login-wrapper" style='display:flex; width:100vw;height:100vh'>
    <div class="left-login" style='width:44%;padding:32px 16px'>
        <center>
            <img src="media/logo.jpg">

            <br>
            <br>

            <h2>Login</h2>
            <p>Welcome back. Login to start working.</p>
        </center>
        <hr>

        <br>

        <?php $form = Form::begin('', 'post') ?>
        <?php echo $form->field($model, 'email', 'text') ?>
        <?php echo $form->field($model, 'password', 'text')->passwordField() ?>
        <a href=""> Forgot password ?</a>

        <center>
            <button class="btn btn-success">Login to start working</button>
        </center>
        <?php Form::end() ?>

        <hr>

        <center>
            <p>Doesn't have an account?</p>
            <a href="/register">Sign up</a>
        </center>
    </div>
    <div style="width:56%;height:100%;object-fit:contain;background-position: center;
  background-repeat: no-repeat;
  background-size: cover;  background-image: url(' media/background.jpg');">

    </div>`


</div>