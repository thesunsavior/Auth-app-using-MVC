<?php


namespace app\core\form;

use app\core\Application;
use app\core\Model;


class Field extends BaseField
{
    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_FILE = 'file';


    public function __construct(Model $model, string $attribute, string $type)
    {
        $this->type = $type;
        parent::__construct($model, $attribute);
    }

    public function renderInput()
    {
        $preFill = "";
        if (Application::isGuest()) {
            $preFill = $this->model->{$this->attribute};
        } else
            $preFill = Application::$app->user->{$this->attribute};

        return sprintf(
            '<input type="%s" class="form-control%s" name="%s" value="%s">',
            $this->type,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $preFill,
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function fileField()
    {
        $this->type = self::TYPE_FILE;
        return $this;
    }
}
