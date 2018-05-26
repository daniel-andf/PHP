<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;


switch ($_SERVER['REQUEST_METHOD']){

	case "GET": // list all books
		$query = new MongoDB\Driver\Query([]); 
		$rows = $manager->executeQuery("test.books", $query);
		
		foreach ($rows as $row) {
			echo "ID: $row->_id, Book Name: $row->book_name, Author: $row->author";
			echo "<br>";
			
		}

		break;

	case "POST": // insert a new book from a Request Body

		$requestBody = file_get_contents('php://input');

		$obj = json_decode($requestBody);

		$doc = [ '_id' => new MongoDB\BSON\ObjectID, 'book_name' => $obj->book_name, 'author' => $obj->author ];
		$bulk->insert($doc);
		$manager->executeBulkWrite("test.books",$bulk);
  
		echo "Book inserted successfully";
		
		break;

	case "PUT": // update the author by a given book name
		$requestBody = file_get_contents('php://input');

		$obj = json_decode($requestBody);

		$bulk->update ([ 'book_name' => $obj->book_name], ['$set' =>[ 'author' => $obj->author]]);
       
		$manager->executeBulkWrite("test.books",$bulk);

		echo "Book updated successfully";

		break;

	case "DELETE": // delete the given book 

		$requestBody = file_get_contents('php://input');

		$obj = json_decode($requestBody);

		$bulk->delete ([ 'book_name' => $obj->book_name]);
       
		$manager->executeBulkWrite("test.books",$bulk);

		echo "Book deleted successfully";
		
		break;		

	default:
		http_response_code(405);
		break;			
}


?>