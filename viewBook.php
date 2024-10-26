<?php 
$bookJason=file_get_contents('books.json');
$books=json_decode($bookJason,true);
$isbn;



if(!empty($_POST)){
    if(!empty($_POST['title'])){
    
      
      
        $index = $_POST['serial'];

        $books[$index]['title']=$_POST['title'];
        $books[$index]['author']=$_POST['author'];
        $books[$index]['pages']=$_POST['pages'];
        $books[$index]['isbn']=$_POST['isbn'];
        $books[$index]['available']=true;
      
        
      
       
        $newJason = json_encode($books,JSON_PRETTY_PRINT);
       file_put_contents('books.json',$newJason);
    }
    else{
      $isbn= $_POST['isbn']; 
  
  
      
      foreach($books as $key => $book)
      {
          if($book['isbn']===$isbn){
              unset($books[$key]);
          }
      }
      $newJason = json_encode($books,JSON_PRETTY_PRINT);
      file_put_contents('books.json',$newJason);
  }
   
}
  
   
    
  
 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
  <link rel="stylesheet" href="style/viewBook_.css">
 <body>
 <ul>
  <div class="head">
  <h1>Available Books</h1>
  </div>
  <div>
  <table>
    <tbody>
    <tr>
    <td class="c1">Title</td ><td class="c1">Author</td><td class="c1">Availibility</td><td class="c1">ISBN</td><td class="c1"></td><td class="c1"></td>
    </tr>
    
    <?php foreach ($books as $book): ?>
      <tr>
           <td ><?php echo $book['title']; ?></td> <td ><?php echo $book['author']; ?></td>
            <?php if ($book['available']): ?>
              <td >Available</td>
               <?php endif; ?>
              <?php if (!$book['available']): ?>
              <td >Not Available</td>
              <?php endif; ?>
        <td><?php echo $book['isbn']; ?></td>
        <td >
          <form action="editBook.php" method="post">
            <input type="hidden" name="isbn" value=<?php echo $book['isbn'] ?>>
          <button class="edit_btn" type="submit" >Edit</button>
          </form>
        </td>

        <td >
          
          <form action="viewBook.php" method="post">
          <input type="hidden" name="isbn" value=<?php echo $book['isbn'] ?>>
          <button class="delete_btn" type="submit">Delete</button>
          </form>
          </td>

        </tr>
 <?php endforeach; ?>

    
   

    </tbody>
  </table>
  
  </div>
  <div class="btn"><button onclick="window.location.href='index.php';"> Go back to home page</button></div>
  
  
 
    </ul>

 </body>
 </html>
 