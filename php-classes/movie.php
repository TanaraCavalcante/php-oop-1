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

$movies = [
    $barbie,
    $lilo
];

?>

