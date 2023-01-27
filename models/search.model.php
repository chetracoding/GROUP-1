<?php

function getShowsByTitle(string $text) : array
{
  global $connection;
  $statement = $connection->prepare("select * from shows where name like :text limit 12;");
  $statement->execute([
    ':text' => "%$text%"
  ]);
  return $statement->fetchAll();
}