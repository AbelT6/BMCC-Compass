<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=CompassBmcc', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $phoneNumber = filter_input(INPUT_POST, 'phoneNumber', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $confirmPassword = filter_input(INPUT_POST, 'confirmPassword', FILTER_SANITIZE_STRING);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, $role === 'student' ? 'studentId' : 'facultyId', FILTER_SANITIZE_STRING);

    if ($password !== $confirmPassword) {
        $_SESSION['error'] = 'Passwords do not match.';
        header('Location: registration.php');
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM StudentUsers WHERE email = :email UNION ALL SELECT COUNT(*) FROM FacultyUsers WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $results = $stmt->fetchAll(PDO::FETCH_COLUMN);

        if ($results[0] > 0 || $results[1] > 0) {
            $_SESSION['error'] = 'This email is already registered.';
        } else {
            if ($role === 'student') {
                $stmt = $pdo->prepare("INSERT INTO StudentUsers (FirstName, LastName, Email, PhoneNumber, PasswordHash, StudentID) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$firstName, $lastName, $email, $phoneNumber, $hashedPassword, $id]);
            } elseif ($role === 'faculty') {
                $stmt = $pdo->prepare("INSERT INTO FacultyUsers (FirstName, LastName, Email, PhoneNumber, PasswordHash, FacultyID) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$firstName, $lastName, $email, $phoneNumber, $hashedPassword, $id]);
            }
            $_SESSION['success'] = 'Registration successful!';
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Database error: " . $e->getMessage();
    }
    
    header('Location: success.php');
    exit;
}
?>
<!DOCTYPE html>
<!-- Your HTML starts here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="CSS/registration.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        
        <form action="registration.php" method="post">
            <h1>Sign Up</h1>

            <div class="input-box">
                <div class="input-field">
                    <select name="role" id="roleSelect" required >
                        <option value="">Select Role</option>
                        <option value="student">Student</option>
                        <option value="faculty">Faculty</option>
                    </select>
                    <i class='bx bx-id-card' ></i>
                </div>
                <div class="input-field">
                    <input type="text" id="idField" name="studentId" placeholder="Student ID">
                    <i class='bx bxs-id-card'></i>
                </div>
            </div>


            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="firstName"  placeholder="First Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="lastName"  placeholder=" Last Name" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="email"  name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-field">
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required
                    pattern="\(\d{3}\)-\d{3}-\d{4}" title="Format: (123)-456-7890">
                    <i class='bx bxs-phone'></i>
                </div>
            </div>

            

            <div class="input-box">
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="password"  name="confirmPassword" placeholder="Confirm Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>
            

            <label>
                <input type="checkbox"> I hereby declare that the above information provided is true and correct
            </label>
            <button type="submit" class="btn">Sign Up</button>
        </form>
    </div>
    <script>
        document.getElementById('roleSelect').addEventListener('change', function() {
            var role = this.value;
            var idField = document.getElementById('idField');

            if (role === 'faculty') {
                idField.placeholder = "Faculty ID";
                idField.name = "facultyId";
            } else {
                idField.placeholder = "Student ID";
                idField.name = "studentId";
            }
        });
    </script>
    <script>
    document.getElementById('phoneNumber').addEventListener('input', function (e) {
        var rawNumbers = e.target.value.replace(/\D/g, ''); // Remove non-digit characters
        var formattedNumber = rawNumbers.match(/(\d{0,3})(\d{0,3})(\d{0,4})/);

        // Format the number as the user types
        e.target.value = !formattedNumber[2] ? formattedNumber[1] : '(' + formattedNumber[1] + ')-' + formattedNumber[2] + (formattedNumber[3] ? '-' + formattedNumber[3] : '');

        // Validation for exactly 10 digits
        if (rawNumbers.length === 10) {
            e.target.setCustomValidity(''); // Clear custom validity message
        } else {
            e.target.setCustomValidity('Please enter a 10-digit phone number');
        }
        });
        </script>
    </body>
    </html>
