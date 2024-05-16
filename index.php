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
    <div>
    <form action=""  method="POST">
         
       
         <label>E-Mail</label><br><br>
        <input type="text" name="email" id="text" placeholder="Enter your email ID" required>
        <br><br>
    
        <label>Password</label><br><br>
        <input type="password" name="password" id="text" placeholder="Enter your Pasword" required>
        <br><br><br>
          <button id="btn1">NEXT</button>
         
      
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
    $mail = filter_input(INPUT_POST, "email" ,FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password" ,FILTER_SANITIZE_SPECIAL_CHARS);
    
      $sql = "INSERT INTO details(email,password)
          VALUES ('$mail','$password')";

      try{
      mysqli_query($conn, $sql);
      header("location: doctor.php");
      }
      catch(mysqli_sql_exception){
        echo 'ok';
      }
    }

      mysqli_close($conn);
  
?>    
      
