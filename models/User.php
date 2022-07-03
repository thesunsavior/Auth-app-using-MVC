<?php

namespace app\models;

use app\core\Application;
use app\core\DbModel;
use app\core\UserModel;

class User extends UserModel
{
    public int $id = 0;
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';
    public string $img_name = '';
    public string $job_tile = '';
    public string $company_name = '';


    public static function tableName(): string
    {
        return 'users';
    }

    public function attributes(): array
    {
        return ['firstname', 'lastname', 'email', 'password', 'img_name', 'job_tile', 'company_name'];
    }

    public function labels(): array
    {
        return [
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'passwordConfirm' => 'Password Confirm',
            'img_name' => 'Avatar image',
            'job_tile' => 'job title',
            'company_name' => 'company name',
        ];
    }

    public function rules()
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
            'passwordConfirm' => [[self::RULE_MATCH, 'match' => 'password']],
        ];
    }

    public function save()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        return parent::save();
    }

    public function update()
    {

        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn ($attr) => "$attr = :$attr", $attributes);
        $pk = Application::$app->user->primaryKey();
        error_log("inside update");
        $statement = self::prepare("UPDATE $tableName SET " . implode(",", $params) . " WHERE id = $pk");
        $test = "UPDATE $tableName SET (" . implode(",", $params) . ") WHERE id = $pk";


        foreach ($attributes as $attribute) {
            if ($this->{$attribute} != null) {
                $statement->bindValue(":$attribute", $this->{$attribute});
                error_log($attribute);
                error_log("not null");
            } else {
                $statement->bindValue(":$attribute", Application::$app->user->{$attribute});
                error_log($attribute);
                error_log("null");
            }
        }

        error_log("prepare testing");
        error_log($test);

        $statement->execute();
        return true;
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}
