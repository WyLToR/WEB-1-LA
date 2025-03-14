<?php

final class Layout
{
  private string $layout;

  public function __construct(string $layout)
  {
    $this->layout = $layout;
  }

  public function setLayout(string $layout): void
  {
    $this->layout = $layout;
  }

  public function show(): void
  {
    require $this->layout;
  }
}
