<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-j IT App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- Modern Heading -->
    <h1 class="page-title wow animate__animated animate__fadeInRight">Al-j IT App</h1>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="glass-container col-md-4">
                <div class="card-header">
                    Admin Login
                </div>
                <form id="login-form">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary login-btn btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Credit -->
    <div class="credit">
        Developed by SK
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
