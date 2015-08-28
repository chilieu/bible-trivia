<?php

class Level extends BaseModel
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $category_id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $value;

    public function initialize()
    {
        $this->belongsTo('category_id', 'Category', 'id');
        $this->hasMany("id", "LevelQuestion", "level_id");
        $this->hasManyToMany(
            "id",
            "LevelQuestion",
            "level_id", "question_id",
            "Question",
            "id"
        );
    }

    public function beforeSave()
    {
        //if( empty($this->name) ) return false;
        $this->name = $this->getDI()->getFilter()->sanitize($this->name, "trim");
        $this->name = $this->getDI()->getFilter()->sanitize($this->name, "string");

        //if( empty($this->value) ) return false;
        $this->value = $this->getDI()->getFilter()->sanitize($this->value, "trim");
        $this->value = $this->getDI()->getFilter()->sanitize($this->value, "string");
        
    }

    public function beforeDelete()
    {
        //delete level also need to delete level-question all rows in bible level question table
        $conditions = "level_id = :level_id:";
        $param = array(
            "level_id" => $this->id
        );
        $cleanup_first = LevelQuestion::find(array($conditions,"bind" => $param));
        foreach ($cleanup_first as $item) {
            $item->level_id = 1;//1 is the first level
            if( !$item->save() ){
                return false;
            }
        }
        return true;
    }

}
