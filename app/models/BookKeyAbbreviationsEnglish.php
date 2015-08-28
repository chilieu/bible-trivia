<?php

class BookKeyAbbreviationsEnglish extends BookModel
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
    public $a;

    /**
     *
     * @var integer
     */
    public $b;

    /**
     *
     * @var integer
     */
    public $p;

    public function initialize()
    {
    	parent::initialize();
        $this->setSource("key_abbreviations_english");
    }


}