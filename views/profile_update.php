<?php

/** @var $model \app\models\LoginForm */

use thecodeholic\phpmvc\form\Form;
use thecodeholic\phpmvc\Application;

// error_log("After POSTEE");

// error_log(sizeof($_FILES));
// error_log(sizeof($_POST));


?>

<h1>Update your infomation</h1>
<div class="row">
    <img src="/media/<?php echo Application::$app->user->img_name ?>" alt="Avatar pic" style="width: 200px; height: 200px; vertical-align: middle; border-radius:50%;"><img>
    <div class="col">
        <?php $form = Form::begin('', 'POST') ?>
        <?php echo $form->field($model, 'img_name', 'file') ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field($model, 'firstname', 'text') ?>
            </div>
            <div class="col">
                <?php echo $form->field($model, 'lastname', 'text') ?>
            </div>
        </div>
        <?php echo $form->field($model, 'email', 'text') ?>
        <button class="btn btn-success" name="submit">Submit</button>
        <?php Form::end() ?>
    </div>
</div>