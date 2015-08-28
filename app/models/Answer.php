<?php

class Answer extends BaseModel
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
    public $question_id;

    /**
     *
     * @var string
     */
    public $answer;

    /**
     *
     * @var string
     */
    public $note;

    public function initialize()
    {
        $this->belongsTo('question_id', 'Question', 'id');
    }

    public function beforeSave()
    {
        //if( empty($this->answer) ) return false;
        $this->answer = $this->getDI()->getFilter()->sanitize($this->answer, "trim");
        $this->answer = $this->getDI()->getFilter()->sanitize($this->answer, "string");

    }

}
