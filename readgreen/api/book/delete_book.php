<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/styles.css">
  <title>Read Green</title>
</head>

<body>
  <?php  include "../config/db.php"; ?>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
        <h1> Read Green </h1>
      </div>
      <div class="col-md-4">

      </div>

    </div>

  </div>
 </header>
  <div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="main-content col-md-8">
          <h2> Delete one book from our Catalog</h2>


          <form class="form-horizontal" id="registerform" name="registerform" method="post" action="delete_book_ok.php">
            <div class="form-div">
            <hr>
              <div class="form-group">
                <label for="id" class="col-sm-4 col-form-label">Select one book: </label>
                <div class="col-sm-8">
                  <?php getBooks('delete_book');?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-10 btt-div">
                <button type="submit" class="btn btn-primary">Delete Book</button>

                </div>
              </div>
            </div>
        </form>


      </div>
      <div class="col-md-2">

      </div>
   </div>
 </div>
   <footer>
     <div class="container">
       <div class="row">
         <div class="col-md-2">

         </div>

         <div class="col-md-8">
         <small>Designed by Daniel Fonseca © 2018</small>

       </div>
       <div class="col-md-2">

       </div>

     </div>

   </div>
   </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
</body>

</html>
