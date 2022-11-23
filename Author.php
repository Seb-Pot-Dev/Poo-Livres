<?php  
Class Author{ 
    private $_authorlastn;
    private $_authorfirstn;
    private $_books;
    public function __construct($authorlastn, $authorfirstn){
        $this->_authorlastn=$authorlastn;
        $this->_authorfirstn= $authorfirstn;
        $this->_books=[];
    }

    public function addBook($book){
    $this->_books[]=$book;
    }
    public function __toString()
    {
        $authorfulln=$this->_authorlastn." ".$this->_authorfirstn;
        return $authorfulln;
    }

    
    public function showbiblio(){
        echo "<b>Livres de ".$this->_authorlastn." ".$this->_authorfirstn."</b><br><br>";
        foreach ($this->_books as $key){
            echo $key;
        }
        echo "-----------------------<br>";
    }
    }



?>