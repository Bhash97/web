<?php
// Initialize variables to store validation errors and sanitized data
$errors = [];
$fullName = $email = $subject = $message = '';

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email format
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate Full Name
    $fullName = sanitizeInput($_POST['FullName']);
    if (!preg_match("/^[a-zA-Z ]*$/", $fullName)) {
        $errors['FullName'] = "Full Name should contain only letters and spaces";
    }

    // Sanitize and validate Email
    $email = sanitizeInput($_POST['Email']);
    if (!validateEmail($email)) {
        $errors['Email'] = "Invalid email format";
    }

    // Sanitize Subject (optional validation)
    $subject = sanitizeInput($_POST['Subject']);

    // Sanitize and validate Message
    $message = sanitizeInput($_POST['Message']);

    // If no validation errors, you can proceed to send the email or process the data
    if (empty($errors)) {
        // Process the data, send email, etc.
        // Example: sending email using PHP's mail() function
        $to = 'your@example.com';
        $subject = 'Contact Form Submission';
        $messageBody = "Full Name: $fullName\nEmail: $email\nSubject: $subject\nMessage: $message";
        mail($to, $subject, $messageBody);
        // Redirect or show a success message to the user
        header('Location: success_page.php');
        exit();
    }
}
?>

<div id="Contact" class="flex flex-col bg-gray-300 justify-center items-center">
    <h1 class="text-gray-900 font-bold text-4xl  uppercase mt-16 pt-4">Contact</h1>
    <div class="flex gap-10 w-96 pt-3 md:justify-between">
        <form action="" method="post"> <!-- Removed the formspree URL for demonstration -->
            <input type="text" name="FullName" class="m-5 w-full py-2 px-2 rounded text-black" placeholder="Full Name" required>
            <?php if(isset($errors['FullName'])) echo '<p class="text-red-500">' . $errors['FullName'] . '</p>'; ?>
            <input type="email" name="Email" class="ml-5 py-2 px-2 w-full rounded text-black" placeholder="Email" required><br>
            <?php if(isset($errors['Email'])) echo '<p class="text-red-500">' . $errors['Email'] . '</p>'; ?>
            <input type="text" name="Subject" class="ml-5 mt-5 w-full py-2 px-2 rounded text-black" placeholder="Subjects" required><br>
            <textarea name="Message" placeholder="Message Is Here..." cols="30" class="m-5 w-full py-2 px-2 rounded-lg text-black" rows="7" required></textarea>
            <button class="ml-5 -mt-2 bg-blue-500 text-white rounded px-3 py-2 transition transform hover:-translate-y-1 hover:bg-blue-900 uppercase font-semibold" type="submit">Submit</button>
        </form>
    </div>
    <br>
</div>
