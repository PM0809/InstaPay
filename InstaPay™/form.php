<?php
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $pincode = $_POST['pincode'];
      $Card_type = $_POST['card_type'];
      $Card_number = $_POST['Card_number'];
      $Exp_date = $_POST['exp_date'];
      $CVV = $_POST['CVV'];


      //database connection
      $conn = new mysqli('localhost','root','','InstaPay');
      if($conn->connect_error)
      {
            die('Connection Failed: '.$conn->connect_error);
      }
      else
      {
            $stmt=$conn->prepare("Insert into InstaPay(name,gender,address,email,pincode,card_type,Card_number,exp_date, CVV)
            values(?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssisiii",$name,$gender,$address,$email,$pincode,$card_type,$Card_number,$exp_date,$CVV);
            $stmt->execute();
            $stmt->"Recharge Done Successfully...";
            $stmt->close();
            $conn->close();
      }
?>
