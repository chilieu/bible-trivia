<?php

class BookTBbe extends BookModel
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
        $this->setSource("t_bbe");
    }


}