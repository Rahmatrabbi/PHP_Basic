<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
     
        <input type="text" placeholder="Name" name="uname"><br/><br/>
        <input type="email" placeholder="Email" name="email"><br/><br/>
        <textarea placeholder="Message" name="message"></textarea><br/><br/>
        <input type="submit" placeholder="Submit" name="submit">
</form>
<br><br><br>
<?php
      if(isset($_POST['submit'])){
        echo $_POST['uname']. "<br/>";
        echo $_POST['email']. "<br/>";
        echo $_POST['message'];
      }

?>
</body>
</html>