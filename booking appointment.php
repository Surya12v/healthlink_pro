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
    <div id="conttainer">
    <form action=""  method="POST">
         <p>Book appointment</p>
        <input type="text" name = "name" id="btn6">
        <select id="btn6" name="gen">
          <option value="">--select--</option>
            <option value="general">general</option>
            <option value="specialist">specialist</option>
            <option value="cardio">cardio</option>
         </select>
       <br>

         <button type="submit" name="submit" >click</button>
         
         
      
    </form>
    </div> 
  </main>
  <footer>
    
  </footer>
</body>
</html>
<?php
  
      if(isset($_POST['submit']))
      {
        $gen=$_POST['gen'];
        $name=$_POST['name'];
      
      $sql = "INSERT INTO demo (gen,name)
          VALUES ('$gen','$name')";
      
      try{
        mysqli_query($conn, $sql);
        header("location: view.php");
        }
        catch(mysqli_sql_exception){
          echo 'ok' . $e->getMessage();
        }
      }
  
        mysqli_close($conn);
    

?>    
    