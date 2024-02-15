<?php

function getShowsByTitle(string $text, string $date) : array
{
  global $connection;
  $statement = $connection->prepare("select * from release_date_shows where title like :text and date >= :date group by show_id;");
  $statement->execute([
    ':text' => "%$text%",
    ':date' => $date
  ]);
  return $statement->fetchAll();
}