<?php

class BookCrossReference extends BookModel
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
    public $r;

    /**
     *
     * @var integer
     */
    public $sv;

    /**
     *
     * @var integer
     */
    public $ev;

    public function initialize()
    {
    	parent::initialize();
        $this->setSource("cross_reference");
    }


}