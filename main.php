<?php 
$bookJason=file_get_contents('books.json');
$books=json_decode($bookJason,true);
  
  $book = [
    [
        'title' => $_POST['title'],
        'author' =>  $_POST['author'],
        'available' => $_GET['available'],
        'pages' =>  $_POST['pages'],
        'isbn' =>  $_POST['isbn']
    ]
    ];
    $addBooks=array_merge($books,$book);
    
    //$books=array_merge($books,$book);
    $newJason = json_encode($addBooks,JSON_PRETTY_PRINT);
   file_put_contents('books.json',$newJason);
   
    
  
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
  <link rel="stylesheet" href="style/main.css">
 <body>
 <ul>
  <div class="head">
  <h1>Available Books</h1>
  </div>
  <div>
  <table>
    <tbody>
    <tr>
      <td class="c1">Title</td ><td class="c2">Author</td><td class="c3">Availibility</td><td class="c4">ISBN</td>
    </tr>
    
    <?php foreach ($addBooks as $boook): ?>
      <tr>
           <td ><?php echo $boook['title']; ?></td> <td ><?php echo $boook['author']; ?></td>
            <?php if ($boook['available']): ?>
              <td >Available</td>
               <?php endif; ?>
              <?php if (!$boook['available']): ?>
              <td >Not Available</td>
              <?php endif; ?>
        <td><?php echo $boook['isbn']; ?></td>
        </tr>
 <?php endforeach; ?>

    
   

    </tbody>
  </table>
  </div>
  
  
 
    </ul>

 </body>
 </html>
 