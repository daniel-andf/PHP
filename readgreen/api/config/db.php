<?php

function getBooks($page){

  $servername = "localhost";
  $user = "root";
  $password = "";
  $dbname = "readgreen";

  $conn = new mysqli($servername,$user,$password,$dbname) or die("Unable to connect to the database");

  $sql = "SELECT id, book_name, author,available FROM books";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    if($page == 'list_books'){
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>Book Name: ".$row["book_name"]."</td>";
          echo "<td>Author: ".$row["author"]."</td>";
          echo "<td>Is Available: ".$row["available"]."</td></tr>";

      }
    }
    else{

      echo "<select name ='book-select'>";
      while($row = $result->fetch_assoc()) {
        echo "<option value=". $row["id"] .">". $row["book_name"] ."</option>";
      }
      echo "</select>";

    }

  } else {
    echo "<script type='text/javascript'>alert('No book found!!!');</script>";
  }
  $conn->close();

}

function insertBooks($book_name,$author){

  $servername = "localhost";
  $user = "root";
  $password = "";
  $dbname = "readgreen";


  $conn = new mysqli($servername,$user,$password,$dbname) or die("Unable to connect to the database");

  $sql = "SELECT MAX(id) from books";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $row = mysqli_fetch_row($result);
    $id = $row[0] + 1;

    echo $id;

    $available="Y";

    $sql = "INSERT INTO books(id,book_name,author,available) VALUES(".$id.",'".$book_name."', '".$author."','".$available."')";

    if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('New book added successfully');</script>";
      echo "<script>location.href='add_book.php';</script>";
    } else {

      echo "<script type='text/javascript'>alert('Unable to add new book');</script>";
    }

  } else {
    echo "<script type='text/javascript'>alert('No book found!!!');</script>";
  }

  $conn->close();

}

function deleteBook($id){

  $servername = "localhost";
  $user = "root";
  $password = "";
  $dbname = "readgreen";

  $conn = new mysqli($servername,$user,$password,$dbname) or die("Unable to connect to the database");

  $sql = "DELETE from books WHERE id=".$id."";

  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Book deleted successfully from Catalog!!!');</script>";
    echo "<script>location.href='delete_book.php';</script>";
  } else {
    echo "<script type='text/javascript'>alert('Error deleting record: ". $conn->error."');</script>";
  }

  $conn->close();

}

function updateBook($id,$book_name,$author){

  $servername = "localhost";
  $user = "root";
  $password = "";
  $dbname = "readgreen";

  $update_sql="";

  if(($book_name != "") &&($author != "")){
      $update_sql="book_name=".$book_name.",author".$author;
  }
  else
    if(($book_name != "")){
      $update_sql="book_name=".$book_name;
    }
    else{
      $update_sql="author=".$author;
    }

  $conn = new mysqli($servername,$user,$password,$dbname) or die("Unable to connect to the database");

  $sql = "UPDATE books set ".$update_sql."WHERE id=".$id."";

  if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Book Updated !!!');</script>";
    echo "<script>location.href='update_book.php';</script>";
  } else {
    echo "<script type='text/javascript'>alert('Error updating record: ". $conn->error."');</script>";
  }

  $conn->close();

}

 ?>
