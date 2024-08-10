<?php
  function get_actors() {
    global $db;
    $query = 'SELECT * FROM actors
              ORDER BY ActorID';
    $result = $db->query($query);
    return $result;
}
  function get_actors_by_movie($movie_id) {
    global $db;
    $query = "SELECT *
              FROM actors
              JOIN movies_actors 
              ON actors.ActorID = movies_actors.ActorID
              WHERE movies_actors.MovieID = '$movie_id'";
    $result = $db->query($query);
    return $result;
  }
?>

