<?php 
if(!empty($_POST)){
    if(!empty($_POST['title'])){
    $bookJason=file_get_contents('books.json');
    $books=json_decode($bookJason,true);
      
      $book = [
        [
            'title' => $_POST['title'],
            'author' =>  $_POST['author'],
            'available' =>$_POST['available'],
            'pages' =>  $_POST['pages'],
            'isbn' =>  $_POST['isbn']
        ]
        ];
        $addBooks=array_merge($books,$book);
        
        //$books=array_merge($books,$book);
        $newJason = json_encode($addBooks,JSON_PRETTY_PRINT);
       file_put_contents('books.json',$newJason);
    }

}
    
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/index_.css">
   
</head>
<body>
    <div>
    <div>
        <h1 class="head_line">Welcome to Our online Library</h1>
    </div>
    <div class="container">
        <div class="column">
        <button onclick="window.location.href='addBook.php';" class="addBook"> Add Book</button>
        </div>
        <div class="column">
        <button onclick="window.location.href='viewBook.php';"  class="viewBook"> View Books</button>  
        </div>
        <div class="column">
        <button onclick="window.location.href='searchBook.php';"  class="searchBook">Search Book</button>   
        </div>
        
        
       
        
    </div>
    

    </div>
   
</body>
</html>