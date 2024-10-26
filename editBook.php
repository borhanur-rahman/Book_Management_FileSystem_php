<?php 
$bookJason=file_get_contents('books.json');
$books=json_decode($bookJason,true);
$index;


$editBook
 = [
    [
        'title' => '',
        'author' => '',
        'available' => false,
        'pages' => 0,
        'isbn' =>'' 
    ]
    ];
if( !empty($_POST)  ){
    $isbn= $_POST['isbn']; 


    
    foreach($books as $key => $book)
    {
        if($book['isbn']===$isbn){
           $editBook['title']= $book['title'];
           $editBook['author'] = $book['author'];
           $editBook['avilable'] = $book['available'];
           $editBook['pages'] = $book['pages'];
           $editBook['isbn'] = $book['isbn'];
           $index=$key;
           break;
        }
        

    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
 <link rel="stylesheet" href="style/editBook.css">
</head>
<body>
  <div class="head">
    <h1>Edit Your Book Informations </h1>
  </div>
  <div>
   
    <form action="viewBook.php" method="post">
    <table>
      <tbody>
        <tr>
          <td><level for="title">Title</level></td>
          <td class="inp"><input type ="text" name="title" required placeholder="Put title"></td>
        </tr>
        <tr>
          <td><level for="author">Author</level></td>
          <td class="inp"><input type ="text" name="author" required placeholder="Write author name"></td>
        </tr>
        <tr>
          <td><level for="pages">Pages</level></td>
          <td class="inp"><input type ="number" name="pages" required placeholder="Input page number"></td>
        </tr>
        <tr>
          <td> <level for="isbn">ISBN</level></td>
          <td class="inp"><input type ="text" name="isbn" required placeholder="Input isbn"></td>
        </tr>

        


        <tr >
         <td class="lower_row1"></td> <td class="lower_row2"><button class="btn">Submit</button></td>
          <input type="hidden" name="serial" value =<?php echo $index ?>>
         
        </tr>
      </tbody>
    </table>
   
     
    
 
       
    </form>
  </div>
</body>
</html>