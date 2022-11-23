<?php 
spl_autoload_register(function ($class_name) { 

    require_once $class_name . '.php';

});

$StephenKing= new Author ("Stephen", "King");

$book1=new Book("Ca", "1138", "1986", "20", $StephenKing);
$book2=new Book("Simetierre", "374","1983", "15", $StephenKing);
$book3=new Book("Le Fléau", "823", "1978", "14", $StephenKing);
$book4=new Book("Shining", "447", "1977", "16", $StephenKing);

// $StephenKing->addBook($book1);

$sebpot= new Author ("Seb", "Pot");

$book5=new Book ("mon livre", "999", "1997", "1000", $sebpot);
$book6=new Book ("mon autre livre", "1001", "1997", "2000", $sebpot);

$auteurtresconnu=new Author("Auteur", "TrèsConnu");
$book292715=new Book ("Un titre très connu", "249", "2022", "20", $auteurtresconnu);

$auteurtresconnu->showbiblio();
$sebpot->showbiblio();
$StephenKing->showbiblio();
// $book2->getinfo();
// $book3->getinfo();
// $book4->getinfo();
