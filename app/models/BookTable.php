<?php

class BookTable extends BookModel
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
    public $b;

    /**
     *
     * @var integer
     */
    public $c;

    /**
     *
     * @var integer
     */
    public $v;

    /**
     *
     * @var string
     */
    public $t;

    public function initialize()
    {
    	parent::initialize();

        $abbreviation =  empty($_COOKIE["bible-version"]) ? "KJV" : $_COOKIE["bible-version"];
        $bibleVersion = BookBibleVersionKey::findFirstByabbreviation($abbreviation);
        $this->setSource($bibleVersion->table);

        $this->hasOne('b', 'BookKeyEnglish', 'b');
    }


}