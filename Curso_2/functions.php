<?php


function render_template(string $template, array $data = [])
{
  extract($data);
  require "templates/$template.php";
}

function get_data(string $url)
{
  $result = file_get_contents(API_URL);
  $data = json_decode($result, true);
  return $data;
}

function get_until_message(int $days): string
{
  return match (true) {
    $days == 0 => "Se estrena hoy la película!",
    $days == 1 => "Se estrena mañana la película!",
    $days < 7 => "Se estrena esta semana la película!",
    $days < 7 => "Se estrena este mes la película!",
    default => "Faltan $days para la película",
  };
};
