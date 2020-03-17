<?php

//$conn = mysqli_connect('Bibek@localhost','Bibek','bibek12345','todo_db');
$conn= mysqli_connect('localhost','root','','todo_db');


$query = 'SELECT SUBJECT,descreption FROM notes';

$result =$conn->query($query);  
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from databse</title>
</head>
<body>
    <table class="table" align="center" border="1px" style="width:500px" line-height="30px" >
        <tr>
            <th><h2>Subject</h2></th>
            <th><h2>Description</h2></th>
        </tr>
       
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
            echo '<tr>';
            foreach ($row as $rows)
            
            echo '<td>'.$rows.'</td>';
            }
            echo '</tr>'
        ?>       
        
       
    </table>
</body>
</html>

<style>
      .table{
          margin-top:200px;
          background-color: lightgrey;
      }

</style>
<!-- <tr>
               <!-- <td><?php //echo $row['SUBJECT'];?></td> -->
               <td><?php //echo $row['descreption'];?></td>
</tr>   -->