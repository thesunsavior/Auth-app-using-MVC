<?php

use app\core\Application;

$this->title = 'Profile';

// echo '<pre>';
// var_dump(Application::$app->user);
// echo '</pre>';

?>
<br>
<!-- <h1>Profile page</h1>
<div style="margin: auto;  width: 50%;  padding: 10px;">

    <div class="col">
        <h2> <?php echo Application::$app->user->lastname ?> <?php echo Application::$app->user->firstname ?> </h2>
        <p>Email: <?php echo Application::$app->user->email ?> </p>
    </div>

</div> -->

<div class="info-wrapper">
    <img class='avatar' src="/media/<?php echo Application::$app->user->img_name ?>" alt="Avatar pic"><img>
    <div class='body-wrapper'>
        <div class="user-info">
            <h2> <?php echo Application::$app->user->lastname ?> <?php echo Application::$app->user->firstname ?>
        </div>
        <div class="user-desc">Unassigned job title</div>
        <div class="user-detail-desc">
            <div class="info-row">
                <div class="info-title">Email address</div>
                <div class="info-content"><?php echo Application::$app->user->email ?></div>
            </div>
            <div class="info-row">
                <div class="info-title">Company name</div>
                <div class="info-content">unassigned</div>
            </div>
            <div class="info-row">
                <div class="info-title">Phone number</div>
                <div class="info-content">unassigned</div>
            </div>

        </div>
    </div>
</div>
</div>

<style>
    .info-wrapper {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .body-wrapper {}

    .avatar {
        width: 100px;
        height: 100px;
        vertical-align: middle;
        border-radius: 50%;
        display: flex;
        margin-right: 24px;
    }

    .user-info {
        display: flex;
        flex: 1;
        flex-direction: column;

    }

    .user-desc {
        font-size: 15px;
        color: grey;
    }

    .info-row {
        display: flex;
    }

    .info-title {
        width: 120px;
        font-weight: 500;
        font-size: 14px;
    }

    .info-content {
        flex: 1;
        font-size: 14px;
    }
</style>