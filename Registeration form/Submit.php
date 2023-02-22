<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "studentrr");

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check for connection errors
if (mysqli_connect_errno()) {
  echo mysqli_connect_errno();
  die();
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$education = $_POST['education'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$address = $_POST['address'];

// Set the target directory and file
$target_dir = "student_photos/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);

// Move uploaded file to the folder
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
}

// Get the file path
$photo_path = "/uploads/" . basename($_FILES["photo"]["name"]);

// Create the SQL query
$sql = "INSERT INTO Student_Registry (name, email, phone, dob, gender, education, state, district, city, pincode, address, photo_path) 
        VALUES ('$name', '$email', '$phone', '$dob', '$gender', '$education', '$state', '$district', '$city', '$pincode', '$address', '$photo_path')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    $response = array('status' => 'success', 'message' => 'New record created successfully');
} else {
    $response = array('status' => 'error', 'message' => 'Error: ' . $sql . '<br>' . mysqli_error($conn));
}

// Close the connection
mysqli_close($conn);

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
