<?php
class Article{
    private $id;
    private $title;
    private $name;
    private $category;
    private $summary;
    private $content;
    private $author;
    private $datetime;
    private $image;
    public function __construct($id, $title, $name, $category, $summary, $content, $author, $datetime, $image){
        $this->id = $id;
        $this->title = $title;
        $this->name = $name;
        $this->category = $category;
        $this->summary = $summary;
        $this->content = $content;
        $this->author = $author;
        $this->datetime = $datetime;
        $this->image = $image;
    }

    public function getID(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getName(){
        return $this->name;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getSummary(){
        return $this->summary;
    }
    public function getContent(){
        return $this->content;
    }
    public function getAuthor(){
        return $this->author;
    }

    public function getDatetime(){
        return $this->datetime;
    }

    public function getImage(){
        return $this->image;
    }
}