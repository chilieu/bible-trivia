<?php

class BookKeyGenreEnglish extends BookModel
{

    /**
     *
     * @var integer
     */
    public $g;

    /**
     *
     * @var string
     */
    public $n;


    public function initialize()
    {
    	parent::initialize();
        $this->setSource("key_genre_english");
    }


}