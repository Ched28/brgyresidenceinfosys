<?php 

namespace app\core\form;

use app\core\Model;
class Field{

    public const TYPE_TEXT = 'text';
    public const TYPE_EMAIL = 'email';
    public const TYPE_NUMBER = 'number';
    public const TYPE_HIDDEN = 'hidden';
    public const TYPE_DATE = 'date';


    public string $type;
    public Model $model;
    public string $attribute;
    public string $label;

    public function __construct(\app\core\Model $model, string $attribute, string $label){

        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
        $this->label = $label;
        
    }

    public function __toString(){
        return sprintf('
        <div class="form-group">
        <label> %s </label>
        <input type="%s" name="%s" value="%s" class="form-control user-input-field%s"  placeholder="%s">   
        
        <div class="invalid-feedback">
            %s
        </div>
        </div>
        ', ucfirst($this->label),
            $this->type,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->attribute,
        $this->model->getFirstError($this->attribute)
        );
    }
        public function numberField(){
            $this->type = self::TYPE_NUMBER;
            return $this;
        }
        public function emailField(){
            $this->type = self::TYPE_EMAIL;
            return $this;
        }
    public function typeHidden(){
        $this->type = self::TYPE_HIDDEN;
        return $this;
    }
    public function typeDate(){
        $this->type = self::TYPE_DATE;
        return $this;
    }
    }