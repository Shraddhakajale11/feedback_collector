<?php
include 'db.php'; // connects to the database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Prepare statement to avoid SQL injection
        $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sss", $name, $email, $message);
            $success = $stmt->execute();
            $stmt->close();

            if ($success) {
               header("Location: thankyou.html");

                exit;
            } else {
              header("Location: thankyou.html");

                exit;
            }
        } else {
            // SQL error
          header("Location: thankyou.html");

            exit;
        }
    } else {
        // Missing field
     header("Location: thankyou.html");

        exit;
    }
} else {
    // Not POST request
   header("Location: thankyou.html");

    exit;
}
?>
