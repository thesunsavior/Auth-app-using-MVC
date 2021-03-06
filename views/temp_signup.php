<?php



use app\core\form\Form;

$form = new Form();
?>
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