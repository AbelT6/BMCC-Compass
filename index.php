<?php
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=CompassBmcc', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        // Attempt to log in as a faculty member
        $stmt = $pdo->prepare("SELECT PasswordHash FROM FacultyUsers WHERE Email = :email");
        $stmt->execute(['email' => $email]);
        $faculty = $stmt->fetch();

        if ($faculty && password_verify($password, $faculty['PasswordHash'])) {
            // Redirect to faculty dashboard
            header('Location: dashboardFaculty.php');
            exit;
        }

        // If not found in FacultyUsers, attempt to log in as a student
        $stmt = $pdo->prepare("SELECT PasswordHash FROM StudentUsers WHERE Email = :email");
        $stmt->execute(['email' => $email]);
        $student = $stmt->fetch();

        if ($student && password_verify($password, $student['PasswordHash'])) {
            // Redirect to student dashboard
            header('Location: dashboard.php');
            exit;
        }

        // If login is unsuccessful
        $_SESSION['error'] = 'Invalid login credentials, please try again.';
    }
} catch (PDOException $e) {
    $_SESSION['error'] = "Connection failed: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSS Links -->
        <link href="CSS/login.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- Font Links -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rozha+One&display=swap" rel="stylesheet">

        <!-- Page Title -->
        <title>BMCC's Student Compass - Login</title>
    </head>
    <body>
        <!-- Logo Section -->
        <div class="logo">
            <img src="assets/logo.png" alt="BMCC Compass logo">
        </div>

        <!-- Login Form Wrapper -->
        <div class="wrapper">
        <?php if (isset($_SESSION['error'])): ?>
        <div class="error"><?php echo htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        

            <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <!-- Email Input -->
                <div class="input-box">
                    <input type="text" name="email" placeholder="Enter your email"  required>
                    <i class='bx bxs-user'></i>
                </div>

                <!-- Password Input -->
                <div class="input-box">
                    <input type="password" name="password" placeholder="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <!-- Remember Me and Forgot Password -->
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn">Login</button>

                <!-- Registration Link -->
                <div class="register-link">
                    <p>Don't have an account yet? <a href="registration.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </body>
