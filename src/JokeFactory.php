<?php

namespace Zozo\ChuckNorrisJokes;

class JokeFactory
{
  public $jokes = [
    'Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.',
    'Time waits for no man. Unless that man is Chuck Norris.',
    'If you spell Chuck Norris in Scrabble, you win. Forever.',
    'Chuck Norris breathes air … five times a day.',
    'In the Beginning there was nothing … then Chuck Norris roundhouse kicked nothing and told it to get a job.',
    'Bla bla'
  ];

  public function __construct(array $jokes = null)
  {
    if ($jokes) {
      $this->jokes = $jokes;
    }
  }

  public function getRandomJoke()
  {
    return $this->jokes[array_rand($this->jokes)];
  }
}

