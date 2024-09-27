<?php
    $Name= $_GET['name'];
   
    $Roll= $_GET['roll'];
   
    $s1= $_GET['subject1'];
    
    $s2= $_GET['subject2'];
    
    $s3= $_GET['subject3'];

    if($Roll<0)
    {
        echo "invalid input";
        return;
    }

    if($s1>100||$s1<0)
    {
        echo "invalid input";
        return;
    }
    if($s2>100||$s2<0)
    {
        echo "invalid input";
        return;
    }
    if($s3>100||$s3<0)
    {
        echo "invalid input";
        return;
    }
    function getGrade($mark)
    {
        $grade;
        if($mark>=80)
            $grade='A+';
         else if($mark>=75)
           $grade='A';
         else if($mark>=70)
            $grade='A-';
         else if($mark>=65 )
            $grade='B+';
         else if($mark>=60)
            $grade='B';
         else if($mark>=55)
           $grade='B-';
         else if($mark>=50 )
           $grade='C+';
         else if($mark>=45)
           $grade='C';
        else if($mark>=40)
           $grade='D';
        else
           $grade='F';
    return $grade;

    }
    $point=[
    'A+'=>4,
    'A'=>3.75,
    'A-'=>3.5,
    'B+'=>3.25,
    'B'=>3,
    'B-'=>2.75,
    'C+'=>2.5,
    'C'=>2.25,
    'D'=>2,
    'F'=>0];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style/result.css">
</head>

<body>
    <div class="heading">
        <h1>Result Sheet</h1>
    </div>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>
                        <?php echo "$Name" ?>
                    </td>
                </tr>
                <tr>
                    <td>Roll</td>
                    <td>
                        <?php echo "$Roll" ?>
                    </td>
                </tr>
                <tr>
                    <td>Subject1</td>
                    <td>
                        <?php  $p=getGrade($s1); echo "$point[$p]($p)" ?>
                    </td>
                </tr>

                <tr>
                    <td>Subject2</td>
                    <td>
                        <?php  $p1=getGrade($s2); echo "$point[$p1]($p1)" ?>
                    </td>
                </tr>
                <tr>
                    <td>Subject2</td>
                    <td>
                        <?php  $p2=getGrade($s3); echo "$point[$p2]($p2)" ?>
                    </td>
                </tr>
                <tr>
                    <td>CGPA</td>
                    <td>
                        <?php 
                    $ave=(($point[$p]+$point[$p1]+$point[$p2])/3); echo number_format($ave, 2, '.', ',') ; ?>
                    </td>
                </tr>








            </tbody>
        </table>
    </div>
</body>

</html>