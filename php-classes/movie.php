<?php
Class Movie {
    //TODO Variabili della stanza
    public $title;
    public $year;
    public $genre;
    public $poster
    

    //TODO Consttuttore: Crea la stanza
    public function __construct(string $title, int $year, string $genre, string $poster){
        $this -> title = $title;
        $this -> year = $year;
        $this -> genre = $genre;
        $this -> poster = $poster;
    }
    
}

?>

