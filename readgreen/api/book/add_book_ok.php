<?php

include "../config/db.php";
$book_name = $_POST["book_name"];
$author = $_POST["author"];

insertBooks($book_name,$author);

?>
