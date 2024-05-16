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
    
    <main >
        <div>
  
    <form action=""  method="POST">
        
       <textarea name="tex" ></textarea><br>
        <button id="btn5">NEXT</button>

    </form>
</div>
  
    </main>
    <footer>
    
    </footer>

   
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $tex = filter_input(INPUT_POST, "tex" ,FILTER_SANITIZE_SPECIAL_CHARS);
    
    
      $sql = "INSERT INTO Prescription (data)
          VALUES ('$tex')";
     
      try{
      mysqli_query($conn, $sql);
      header("location: index.php");
      }
      catch(mysqli_sql_exception){
        echo 'ok';
      }
    }

      mysqli_close($conn);
  
?>    