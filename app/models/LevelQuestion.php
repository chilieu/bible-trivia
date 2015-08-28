<?php

class LevelQuestion extends BaseModel
{

    /**
     *
     * @var integer
     */
    public $level_id;

    /**
     *
     * @var integer
     */
    public $question_id;

    public function initialize()
    {
        $this->belongsTo("question_id", "Question", "id");
        $this->belongsTo("level_id", "Level", "id");
    }

}
