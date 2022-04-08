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


$firstMovie = new Movie('Il padrino', "Vito Corleone, immigrato siciliano, è padrino della famiglia Corleone. È diventato, dopo anni di crimine, principalmente nell'organizzazione del gioco d'azzardo illegale e nei racket sindacali, il più potente tra i cinque capi-mafia italo-americani della città.", 1972, 'Mafia, Drammatico, Giallo', '175 min');


$firstMovie->setMovieLanguage('Italiano');
//var_dump($firstMovie);

//var_dump($firstMovie->getFullMovie());

$secondMovie = new Movie('Matrix', "Thomas Anderson / Neo (Keanu Reeves) è un programmatore della Metacortex, virtuoso cittadino di giorno, mentre di notte è un pericoloso hacker. A causa dei suoi illeciti, è tenuto sotto osservazione dagli agenti Smith (Hugo Weaving), Brown e Jones, che gli inseriscono una cimice nel corpo per controllarlo.", 1999, 'Fantascienza, Azione, Avventura, Cinema Fantastico', '136 min');


$secondMovie->setMovieLanguage('Inglese');
//var_dump($secondMovie);

//var_dump($secondMovie->getFullMovie());


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
  <style>
    /* common */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .main-contain {
      width: 1000px;
      margin: 0 auto;
    }

    .container {
      margin: 100px auto;
      display: flex;
      justify-content: center;
    }

    .img_movie {
      width: 300px;
      height: 500px;
    }

    img {
      width: 100%;
      height: 100%;
    }

    .description {
      width: 300px;
      height: 500px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 20px;
    }

    .description h1 span {
      color: orange;
    }

    h1 {
      font-size: 30px;
      font-weight: 800;
    }

    span {
      color: orange;
    }

    p {
      color: grey;
    }
  </style>
</head>

<body>
  <div class="main-contain">
    <!-- First Movie -->
    <div class="container">
      <div class="img_movie">
        <img src="./img/padrino.jpg" alt="">
      </div>
      <div class="description">
        <h1><span>Titolo:</span> <?php echo $firstMovie->name; ?></h1>
        <p><span>Descrizione:</span> <?php echo $firstMovie->description; ?></p>
        <p><span>Anno:</span> <?php echo $firstMovie->year; ?></p>
        <p><span>Genere:</span> <?php echo $firstMovie->genre; ?></p>
        <p><span>Lunghezza:</span> <?php echo $firstMovie->length; ?></p>
        <p><span>Lingua:</span> <?php echo $firstMovie->language; ?></p>
      </div>
    </div>
    <!-- Second Movie -->
    <div class="container">
      <div class="img_movie">
        <img src="./img/matrix.jpg" alt="">
      </div>
      <div class="description">
        <h1><span>Titolo:</span> <?php echo $secondMovie->name; ?></h1>
        <p><span>Descrizione:</span> <?php echo $secondMovie->description; ?></p>
        <p><span>Anno:</span> <?php echo $secondMovie->year; ?></p>
        <p><span>Genere:</span> <?php echo $secondMovie->genre; ?></p>
        <p><span>Lunghezza:</span> <?php echo $secondMovie->length; ?></p>
        <p><span>Lingua:</span> <?php echo $secondMovie->language; ?></p>
      </div>
    </div>
  </div>


</body>

</html>