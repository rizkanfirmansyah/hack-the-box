<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: ..");
    exit();
}

$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AmikPlant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your CSS styles */
        body {
            font-family: poppins, sans-serif;
            background-color: #F6F8FD;
            color: #34364A;
            margin: 0;
            padding: 0;
        }

        .bg-primary-plant {
            background-color: #74A84E;
            color: #fff;
        }

        .bg-lightv2-plant {
            background-color: #E5E9F2;
            color: #34364A;
        }

        .button-plant {
            border-radius: 21px;
            border-color: #7DC383;
        }

        .button-plant:hover {
            background-color: #7DC383;
        }

        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #74A84E;
            box-shadow: 0 0 0 0.2rem rgba(116, 168, 78, 0.25);
        }

        .login-title {
            font-family: poppinsBold, sans-serif;
            font-size: 24px;
            color: #34364A;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="login-container bg-lightv2-plant">
        <h2 class="login-title text-center">Login to AmikPlant</h2>
        <?php if ($error) : ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form action="../config/login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn bg-primary-plant button-plant">Login</button>
            </div>
            <div class="text-center mt-3">
                <a href="#" class="color-primary-plant">Forgot your password?</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>