<?php



class m0004_add_extra_fields
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN job_tile varchar(255) DEFAULT 'unassigned job title'");
        $db->pdo->exec("ALTER TABLE users ADD COLUMN company_name  varchar(255) DEFAULT 'unassigned'");
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN job_tile varchar(255) DEFAULT 'unassigned job title'");
        $db->pdo->exec("ALTER TABLE users ADD COLUMN company_name  varchar(255) DEFAULT 'unassigned'");
    }
}
