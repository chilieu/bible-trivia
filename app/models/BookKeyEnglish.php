<?php

class BookKeyEnglish extends BookModel
{

    /**
     *
     * @var integer
     */
    public $b;

    /**
     *
     * @var string
     */
    public $n;

    /**
     *
     * @var string
     */
    public $t;

    /**
     *
     * @var integer
     */
    public $g;

    public function initialize()
    {
    	parent::initialize();
        $this->setSource("key_english");

        $this->hasMany("b", "BookTable", "b");
    }


}