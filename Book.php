<?php
class Book
{
    private string $_title; 
    private int $_nbpages;
    private int $_pubdate;
    private float  $_price;
    private Author $_author;

    public function __construct(string $title, int $nbpages, int $pubdate, float $price, Author $author)
    {
        $this->_title = $title;
        $this->_nbpages = $nbpages;
        $this->_pubdate = $pubdate;
        $this->_price = $price;
        $this->_author = $author;
        $this->_author->addBook($this);
    }

    public function gettitle()
    {
        return $this->_title;
    }
    public function getnbpages()
    {
        return $this->_nbpages;
    }
    public function getpubdate()
    {
        return $this->_pubdate;
    }
    public function getprice()
    {
        return $this->_price;
    }
    public function getauthor()
    {
        return $this->_author;
    }

    // public function getinfobook()
    // {
    //     echo $this->_title . "(" . $this->_pubdate . ") : " . $this->_nbpages . " pages / " . $this->_price ."€<br><br>";
    // }
    public function __toString(){
        return $this->_title . "(" . $this->_pubdate . ") : " . $this->_nbpages . " pages / " . $this->_price ."€<br>";
    }

}
