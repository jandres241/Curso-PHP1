<?php

declare(strict_types=1);

class NextMovie
{
  public function __construct(private int $days_until, private string $title,)
  {
  }
}
