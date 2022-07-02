<?php

/**
 * User: TheCodeholic
 * Date: 7/10/2020
 * Time: 8:07 AM
 */

class m0003_add_image
{
    public function up()
    {
        $db = \thecodeholic\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN  img_name varchar(255) DEFAULT 'Default.jpg' ");
    }

    public function down()
    {
        $db = \thecodeholic\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN  img_name varchar(255) DEFAULT 'Default.jpg'");
    }
}
