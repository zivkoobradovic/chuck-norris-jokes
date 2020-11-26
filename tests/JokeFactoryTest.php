<?php

namespace Zozo\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Zozo\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
  /** @test */
  public function it_returns_a_random_joke()
  {
    $jokes = new JokeFactory([
      'This is a Joke',
    ]);
    $joke = $jokes->getRandomJoke();

    $this->assertSame('This is a Joke', $joke);
  }

  /** @test */
  public function it_returns_a_predefined_joke()
  {
    $chuckNorrisJokes = (new JokeFactory())->jokes;

    $jokes = new JokeFactory();
    $joke = $jokes->getRandomJoke();

    $this->assertContains($joke, $chuckNorrisJokes);
  }
}
