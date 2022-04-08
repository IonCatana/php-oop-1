<!--
Descrizione:
Ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

<?php
class Movie
{
  //all'interno della classe sono dichiarate delle variabili d'istanza
  public $name;
  public $description;
  public $year;
  public $genre;
  public $length;
  public $language;


  //all'interno della classe è definito un costruttore

  /**
   * Movie constructor
   * @param string $name
   * @param string $description
   * @param int $year
   * @param string $genre
   * @param string $length
   * 
   */

  public function __construct(string $name, string $description, int $year, string $genre, string $length)
  {
    $this->name = $name;
    $this->description = $description;
    $this->year = $year;
    $this->genre = $genre;
    $this->length = $length;
  }

  //all'interno della classe è definito almeno un metodo

  /**
   * Return a movie full info
   * @return string the movie full informations
   */

  public function getFullMovie()
  {
    return 'Il Film si intitola ' . $this->name . ' il genere e ' . $this->genre . ' e stato prodotto nel ' . $this->year . ' ha una durata di  ' . $this->length . ' e la trama e la sequente: ' . $this->description;
  }
  /**
   * Set movie language
   *@param string $language
   */

  public function setMovieLanguage(string $language)
  {
    $this->language = $language;
  }
}


$firstMovie = new Movie('Il padrino', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, obcaecati.', 1972, 'noir, drammatico, gangster', '175 min');

// var_dump($firstMovie);
var_dump($firstMovie);

var_dump($firstMovie->getFullMovie());

$secondMovie = new Movie('Matrix', 'Pariatur, quod. Officiis libero maxime reprehenderit soluta, sint nam laboriosam ea explicabo quisquam, natus obcaecati sequi reiciendis.', 1999, 'fantascienza, azione', '136 min');

// var_dump($secondMovie);
$secondMovie->setMovieLanguage('inglese');
var_dump($secondMovie);

var_dump($secondMovie->getFullMovie());


?>