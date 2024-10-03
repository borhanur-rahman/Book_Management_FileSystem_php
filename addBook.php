<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
 <link rel="stylesheet" href="style/addBook.css">
</head>
<body>
  <div class="head">
    <h1>Input Your Book Informations</h1>
  </div>
  <div>
   
    <form action="main.php?available=true" method="post">
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
        
        </tr>
      </tbody>
    </table>
   
     
    
 
       
    </form>
  </div>
</body>
</html>