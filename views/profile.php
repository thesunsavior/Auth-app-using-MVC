<?php

/** @var $this \thecodeholic\phpmvc\View */

use thecodeholic\phpmvc\Application;

$this->title = 'Profile';

// echo '<pre>';
// var_dump(Application::$app->user);
// echo '</pre>';

?>

<h1>Profile page</h1>

<div class="row">
    <img src="/media/<?php echo Application::$app->user->img_name ?>" alt="Avatar pic" style="width: 50px; height: 50px; vertical-align: middle; border-radius:50%;"><img>
    <div class="col">
        <h3> <?php echo Application::$app->user->lastname ?> <?php echo Application::$app->user->firstname ?> </h3>
        <p>Email: <?php echo Application::$app->user->email ?> </p>
    </div>

</div>