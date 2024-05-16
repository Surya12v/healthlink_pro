<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       <img src="download (2).png">
    </header>
    
    <main>
    <table>
    <tr>
        <th>name</th>
        <th>gene</th>
    </tr>

    <?php
    $sql="select * from demo";
    $res=$conn->query($sql);
    if($res->num_rows>0)
    {
      $i=0;
      while($row=$res->fetch_assoc())
      {
        $i++;
        echo"<tr>";
        echo"<td>{$i}</td>";
        echo"<td>{$row["gen"]}</td>";
        echo"<td>{$row["name"]}</td>";
        echo"<td><button type='button'  class='btn btn-sm btn-danger'><i class='fa fa-edit'></i></td>";
        echo"</tr>";
      }
    }
?>
</table>
    </form>
    </div> 
  </main>
  <footer>
    
  </footer>
</body>
</html>
