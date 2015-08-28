<?php

class Question extends BaseModel
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
    public $question;

    /**
     *
     * @var string
     */
    public $img;

    /**
     *
     * @var string
     */
    public $video;

    /**
     *
     * @var string
     */
    public $note;

    /**
     *
     * @var string
     */
    public $explanation;

    /**
     *
     * @var string
     */
    public $reference;

    public function initialize()
    {
        $this->hasMany("id", "Answer", "question_id");
        $this->hasMany("id", "LevelQuestion", "question_id");
    }

    public function beforeSave()
    {
        //if( empty($this->question) ) return false;
        $this->question = $this->getDI()->getFilter()->sanitize($this->question, "trim");
        $this->question = $this->getDI()->getFilter()->sanitize($this->question, "string");
        
    }

    public function beforeDelete()
    {
        //delete question also need to delete answers belong to its
        $this->getDI()->getDb()->delete("bible_answer", "question_id = " . $this->id);
        $this->getDI()->getDb()->delete("bible_level_question", "question_id = " . $this->id);        
        return true;
    }

}
