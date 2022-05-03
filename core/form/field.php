<?php 

namespace app\core\form;

use app\core\Model;
class Field{
    public Model $model;
    public string $attribute = ' ';

    public function __contruct(\app\core\Model $model, string $attribute){
        
        $this->model = new Model();
        $this->attribute = $attribute;
        
    }

    public function __toString(){
        return sprintf('
        <div class="form-group">
        <label for="%s">%s </label>
        <input type="text" name="%s" value="%s" class="form-control user-input-field%s"  placeholder="%s">   
        <div class="invalid-feedback">
        %s
        </div>
        </div>
        ', $this->attribute, 
        $this->attribute,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->model->getFirstError($this->attribute)
        );
    }



}