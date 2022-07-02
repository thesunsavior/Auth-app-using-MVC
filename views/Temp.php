<?php

/** @var $model \app\models\LoginForm */

use thecodeholic\phpmvc\form\Form;
use thecodeholic\phpmvc\Application;

?>

<h1>Update your infomation</h1>
<div class="row">
    <img src="/media/<?php echo Application::$app->user->img_name ?>" alt="Avatar pic" style="width: 200px; height: 200px; vertical-align: middle; border-radius:50%;"><img>
    <div class="col">
        <?php $form = Form::begin('', 'post') ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field($model, 'firstname') ?>
            </div>
            <div class="col">
                <?php echo $form->field($model, 'lastname') ?>
            </div>
        </div>
        <?php echo $form->field($model, 'email') ?>
        <button class="btn btn-success">Submit</button>
        <?php Form::end() ?>
    </div>
</div>