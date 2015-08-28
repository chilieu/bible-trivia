<?php

class BibleController extends ControllerBase
{

	public function initialize() {
        //set layout to no nav layout
        $this->view->setLayout('bible');
        if ( empty($_COOKIE["bible-version"]) ) {
            setcookie("bible-version", "KJV", time() + 15 * 86400, '/' );
        }
	}

    public function indexAction()
    {
        $default = "genesis-1";
        // Forward flow to the index action
        $this->dispatcher->forward(array(
            "controller" => "bible",
            "action" => "book",
            "bible" => $default
        ));

    }

    public function bookAction($bible=null)
    {
        //$this->view->disable();
        $bible_array    = explode("-", $bible);
        $book           = empty($bible_array[0]) ? "1" : BookKeyEnglish::findFirstByslug( $bible_array[0] )->b;
        $chapter        = empty($bible_array[1]) ? "1" : $bible_array[1];
        $verse          = empty($bible_array[2]) ? "" : $bible_array[2];

        if( !empty($book) && empty($chapter) && empty($verse))
        {
            $bible_detail   = BookTable::query()->where("b = {$book}")->execute();
        } else if( !empty($book) && !empty($chapter) && empty($verse)) {
            $bible_detail   = BookTable::query()->where("b = {$book}")->andWhere("c = {$chapter}")->execute();
        } else if( !empty($book) && !empty($chapter) && !empty($verse)) {
            $bible_detail   = BookTable::query()->where("b = {$book}")->andWhere("c = {$chapter}")->andWhere("v = {$verse}")->execute();
        }

        //getting total chapters of this book
        //$chapters = BookTable::query()->where("b = {$book}")->groupBy(array("BookTable.c"))->execute();
        $chapters = $this->modelsManager->createBuilder()->from('BookTable')->where("b = {$book}")->groupBy(array("BookTable.c"))->getQuery()->execute();

        $this->view->chapters = $chapters->count();
        $this->view->bible = $bible_detail;
        $this->view->book = $bible_detail->getFirst()->BookKeyEnglish->n;

    }

    public function hashBibleAction()
    {
        $bible_hash = $this->request->getPost("bible_hash");
        //disable view in Ajax processing
        $this->view->disable();
        $param      = explode("-", $bible_hash);
        $book       = ($param[0] == "") ? "" : str_pad(BookKeyAbbreviationsEnglish::findFirstBya( ucfirst($param[0]) )->b, 2, "0", STR_PAD_LEFT);
        $chapter    = ($param[1] == "") ? "" : str_pad($param[1], 3, "0", STR_PAD_LEFT);
        $verse      = ($param[2] == "") ? "" : str_pad($param[2], 3, "0", STR_PAD_LEFT);
        echo $book.$chapter.$verse;
        exit;

    }

    public function setVersionAction($version)
    {
        setcookie("bible-version", $version, time() + 15 * 86400, '/' );
        return $this->response->redirect( $this->request->getHTTPReferer() );
    }


    public function bookApiAction($bible='genesis-1')
    {
        $this->view->disable();
        $bible_array    = explode("-", $bible);
        $book           = empty($bible_array[0]) ? "1" : BookKeyEnglish::findFirstByslug( $bible_array[0] )->b;
        $chapter        = empty($bible_array[1]) ? "1" : $bible_array[1];
        $verse          = empty($bible_array[2]) ? "" : $bible_array[2];

        if( !empty($book) && empty($chapter) && empty($verse))
        {
            $bible_detail   = BookTable::query()->where("b = {$book}")->execute();
        } else if( !empty($book) && !empty($chapter) && empty($verse)) {
            $bible_detail   = BookTable::query()->where("b = {$book}")->andWhere("c = {$chapter}")->execute();
        } else if( !empty($book) && !empty($chapter) && !empty($verse)) {
            $bible_detail   = BookTable::query()->where("b = {$book}")->andWhere("c = {$chapter}")->andWhere("v = {$verse}")->execute();
        }

        $chapters = $this->modelsManager->createBuilder()->from('BookTable')->where("b = {$book}")->groupBy(array("BookTable.c"))->getQuery()->execute();


        /*without view*/
        $data['bible'] = $bible_detail->toArray();
        $data['chapters'] = $chapters->count();
        $data['book'] = $bible_detail->getFirst()->BookKeyEnglish->n;
        header('Content-Type: application/json');
        echo json_encode($data);exit;

    }


}

