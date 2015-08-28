<?php

class BookBibleVersionKey extends BookModel
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
    public $table;

    /**
     *
     * @var string
     */
    public $abbreviation;

    /**
     *
     * @var string
     */
    public $language;

    /**
     *
     * @var string
     */
    public $version;    

    /**
     *
     * @var string
     */
    public $info_text;    

    /**
     *
     * @var string
     */
    public $info_url;    

    /**
     *
     * @var string
     */
    public $publisher;    

    /**
     *
     * @var string
     */
    public $copyright;    

    /**
     *
     * @var string
     */
    public $copyright_info;


    public function initialize()
    {
    	parent::initialize();
        $this->setSource("bible_version_key");
    }


}