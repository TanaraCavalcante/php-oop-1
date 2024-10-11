<?php
Class Movie {
    //TODO Variabili della stanza
    public $title;
    public $year;
    public $genre;
    public $poster;
    

    //TODO Consttuttore: Crea la stanza
     function __construct(string $title, int $year, string $genre, string $poster){
        $this -> title = $title;
        $this -> year = $year;
        $this -> genre = $genre;
        $this -> poster = $poster;
    }

    //TODO Funzioni
    public function getTitle(){
        return "$this->title";
    }

     public function getYear(){
         return "$this->year";
    }

     public function getGenre(){
         return "$this->genre";
     }
}

//TODO Movies

$barbie = new Movie("Barbie", 2023,"Commedia/Cinema fantastico","https://www.warnerbros.it/wp-content/uploads/2022/12/Barbie_Teaser-Poster-Italia.jpg");

$lilo = new Movie("Lilo & Stich", 2002, "Per famiglie/Commedia","https://lumiere-a.akamaihd.net/v1/images/p_liloandstitch_19755_0ba5c55e.jpeg?region=0%2C0%2C540%2C810");

$theIdeaOffYou = new Movie("The idea off you", 2024, "Romantico/Commedia","https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRP9ZTD6rLBwwx9gE1qxoktUzOWeo8JUR2BQu5VMwhYF9ez80gx");

$deadpool = new Movie("Deadpool & Wolverine", 2024, "Azione/Commedia", "https://pad.mymovies.it/filmclub/2022/10/021/locandinapg1.jpg");

$godIsBrasilian = new Movie("God is brasilian", 2003, "Commedia/Avventura", "https://upload.wikimedia.org/wikipedia/pt/0/00/Deus_%C3%89_Brasileiro.jpg");

$future = new Movie("L'uomo dal futuro", 2011,"Commedia/Sci-fi","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu8nzIigCgD8g3HlWomggKd0g8a5ENdf99CSwkGQ8xNEAeFfx-BNj3ZoI8gZultcGXav4&usqp=CAU");

$primoBaccio = new Movie("50 first dates", 2004, "commedia/Romantico","https://upload.wikimedia.org/wikipedia/pt/7/78/50_First_Dates_P%C3%B4ster.jpg");

$pompei = new Movie("Pompei", 2014, "Azzione/Avventura", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAOiPTdGo_tuhscTWVUD4SISwjNvOBTeFQErGWUvmh8WbTQ-RM");

//TODO array per il foreach
$movies = [
    $barbie,
    $lilo,
    $godIsBrasilian,
    $deadpool,
    $theIdeaOffYou,
    $future,
    $primoBaccio,
    $pompei,
];
?>

