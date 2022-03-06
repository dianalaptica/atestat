<html>
<body>
<?php
$servername = "192.168.0.4";
$username = "DLaptica";//se va trece user-ul personal
$password = "bIh62O";//se va trece parola personala
$dbname = "DLaptica";//numele bazei de date, la voi este acelasi ca user-ul

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
		echo "Connected successfully";
		//Introduceti datele din formular in tabela 
		$sql = "INSERT INTO abonati (Nume, Email, Mesaj) 
		VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["message"]."')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully<br>";
		} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
		}
$conn->close();
}
?>

</body>
</html>