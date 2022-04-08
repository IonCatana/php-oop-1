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
   
}


?>