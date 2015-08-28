<?php
use \Phalcon\Mvc\Model;

class BaseModel extends Model
{

    public function initialize()
    {
        
    }


    public function getSource()
    {
        $table_name = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', get_class($this)));
        return $this->getDI()->get('config')->database->prefix . $table_name;
    }

}
