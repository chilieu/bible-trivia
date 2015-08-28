<?php
use \Phalcon\Mvc\Model;

class BookModel extends Model
{

    public function initialize()
    {
        $this->setConnectionService('dbBook');
    }

}
