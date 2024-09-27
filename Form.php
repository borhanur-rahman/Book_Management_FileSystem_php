<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
 <link rel="stylesheet" href="style/form.css">
</head>
<body>
  <div class="head">
    <h1>Input Your Information</h1>
  </div>
  <div>
   
    <form action="result.php" method="get">
    <table>
      <tbody>
        <tr>
          <td><level for="name">Name</level></td>
          <td class="inp"><input type ="text" name="name" required placeholder="Name"></td>
        </tr>
        <tr>
          <td><level for="roll">Roll</level></td>
          <td class="inp"><input type ="number" name="roll" required placeholder="Roll"></td>
        </tr>
        <tr>
          <td><level for="subject1">Subject1</level></td>
          <td class="inp"><input type ="number" name="subject1" required placeholder="subject1"></td>
        </tr>
        <tr>
          <td> <level for="subject2">Subject2</level></td>
          <td class="inp"><input type ="number" name="subject2" required placeholder="subject2"></td>
        </tr>
        <tr>
          <td><level for="subject3">Subject3</level></td>
          <td class="inp"> <input type ="number" name="subject3" required placeholder="subject3"></td>
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
