<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and process form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = $_POST['message'];

    // Handle file upload
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['profile_picture']['tmp_name'];
        $file_name = $_FILES['profile_picture']['name'];
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
        echo "File uploaded successfully.";
    } else {
        echo "File upload failed.";
    }

    echo "Form submitted successfully. Name: $full_name, Email: $email.";
} else {
    echo "Invalid request method.";
}
?>
