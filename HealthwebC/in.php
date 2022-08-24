<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['fname']) &&
        isset($_POST['email']) && isset($_POST['date']) &&
        isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['idCard'])) {
           
            $name = $_POST['name'];
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $date=$_POST['date'];
            $date=date('Y-m-d',strtotime($date));
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $idCard = $_POST['idCard'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "covidtest";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM covidtesting1 WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO covidtesting1(name, fname, email, date, phone, gender, idCard) values(?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->bind_param("i", $date);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssiisi",$name, $fname, $email, $date, $phone, $gender, $idCard);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}


?>