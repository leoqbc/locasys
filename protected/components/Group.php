<?php

class Group {
    
    private $models = array();
    
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
    }
    
}
