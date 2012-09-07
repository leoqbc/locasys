<?php

class Group extends CModel {
    
    private $models = array();
    
    public function attributeNames() {
        return array('models', 'required');
    }
    
    public function addInList(CActiveRecord $obj){
        $this->models[] = $obj;
    }
    
    public function incluiModel($class, $id, $field){
        $proc = "\$obj = $class::model()->findByPk($id);";
        eval($proc);
        echo $obj->$field; 
    }
    
    public function __get($name) {
        return $this->$name;
        //parent::__get($name);
    }
    
}
