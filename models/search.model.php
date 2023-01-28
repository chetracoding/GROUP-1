<?php

function getShowsByTitle(string $text, string $date) : array
{
  global $connection;
  $statement = $connection->prepare("select * from shows where name like :text and date >= :date limit 12;");
  $statement->execute([
    ':text' => "%$text%",
    ':date' => $date
  ]);
  return $statement->fetchAll();
}