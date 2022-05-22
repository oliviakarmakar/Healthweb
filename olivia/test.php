<?php
//connect to a the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "covidtest";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
    }
    else{
        echo "connection was successful";
    }






?>

<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tests.css" class="css">
 
</head>
<body>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  { 
      $name=$_POST['name'];
      $text=$_POST['fname'];
      $email=$_POST['email'];
      $text=$_POST['date1'];
      $text=$_POST['phone'];
      //$radio=$_POST['gender'];
      $id=$_POST['id'];
      $sql = @"insert into test.wel values('$name','$fname','$email','$date1','$phone','$id')";

      if ($conn->query($sql) === TRUE) {
        echo "record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your form '.$text.' '.$text.' '.$email.' '.$text.' '.$text.' '.$radio.' '.$text.' '.$file.' has been submitted succesfully!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

?>
    <div class="container">
        <form id="contact" action="test.php" method="post">
            <h1>Covid Testing Form</h1>
            <h3>Fill the form below and press the submit button!</h3>
            <div class="row">
                <!-- first column -->
                <div class="column">                        
                    <fieldset>
                        <input type="text" placeholder="Full Name *" name="name" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input type="text" placeholder="Guardian's name *" name="fname" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input type="email" placeholder="Your email *" name="email" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input type="text" placeholder="Date of birth *" name="date" onfocus="(this.type = 'date')" required autofocus>
                    </fieldset>
                    <!-- adding all country code list -->
                    <fieldset>
                        <input type="text" placeholder="Phone number *" name="phone" id="phone" required autofocus>
                    </fieldset>
                </div>
                <!-- second column -->
                <div class="column">
                    <fieldset>
                        <p>What is your gender?</p>
                        <div class="radio">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Male</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="female" name="gender" required>
                            <label for="female">Female</label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="idCard">Enter your ID CardNo in given formate.</label>
                        <div class="idCard">
                        <input type="text" name="idCard" pattern="[0-9]{5}" placeholder="#####" maxlength="5"> _
                            <input type="text" name="idCard" pattern="[0-9]{7}" placeholder="#######" maxlength="7"> _ 
                            <input type="text" name="idCard" pattern="[0-9]{1}" placeholder="#" maxlength="1">
                        
                        </div>
                    </fieldset>
                    <fieldset>
                        <p>Upload ID Card</p>
                        <input type="file" id="file">
                    </fieldset>
                </div>
            </div>
            <!-- submit button -->
            <fieldset>
                <button type="submit" id="button">Submit Now</button>
            </fieldset>
        </form>
    </div>
 

 
    <!-- Javascript to initialize the code list -->
    <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
     separateDialCode: true
     });
  </script>
</body>
</html>