<?php

class Category extends BaseModel
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;


    public function initialize()
    {
       $this->hasMany("id", "Level", "category_id");
    }

    public function beforeSave()
    {
        //if( empty($this->name) ) return false;
        $this->name = $this->getDI()->getFilter()->sanitize($this->name, "trim");
        $this->name = $this->getDI()->getFilter()->sanitize($this->name, "string");
        
    }

    public function beforeDelete()
    {
        //delete category also need to set the level-category-id in level table to 0
        $conditions = "category_id = :category_id:";
        $param = array(
            "category_id" => $this->id
        );
        $levels = Level::find(array($conditions,"bind" => $param));
        foreach ($levels as $item) {
            echo $item->category_id . "<br>";
            $item->category_id = 0;
            if( !$item->save() ){
                return false;
            }
        }
        return true;
    }


}
