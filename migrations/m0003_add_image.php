<?php



class m0003_add_image
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN  img_name varchar(255) DEFAULT 'Default.jpg' ");
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN  img_name varchar(255) DEFAULT 'Default.jpg'");
    }
}
