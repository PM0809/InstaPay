<?php
      $loginuser = $_POST['loginuser'];
      $loginPassword = $_POST['loginPassword'];


      //database connection
      $conn = new mysqli('localhost','root','','InstaPay');
      if($conn->connect_error)
      {
            die('Connection Failed: '.$conn->connect_error);
      }
      else
      {
            $stmt=$conn->prepare("Insert into ind(loginuser,loginPassword)values(?,?)");
            $stmt->bind_param("ss",$loginuser,$loginPassword);
            $stmt->execute();
            $stmt->"Registration Done Successfully...";
            $stmt->close();
            $conn->close();
      }
?>