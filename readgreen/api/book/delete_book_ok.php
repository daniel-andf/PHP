<?php

include "../config/db.php";
$book_id = $_POST["book-select"];

deleteBook($book_id);

?>
