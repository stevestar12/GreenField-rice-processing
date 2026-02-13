<?php
session_start();
// Redirect if already logged in
if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit();
}

$error = '';
if(isset($_GET['error']) && $_GET['error'] == 1) {
    $error = 'Invalid username or password!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | GreenField Rice Processing</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --rice-green: #2f5d2f;
            --dark-green: #1e401e;
            --light-green: #4a7c4a;
            --earth-brown: #8b5a2b;
            --golden-yellow: #d4af37;
            --cream: #f8f7f3;
            --pure-white: #ffffff;
            --off-white: #f5f5f0;
            --shadow-light: rgba(0, 0, 0, 0.08);
            --shadow-dark: rgba(0, 0, 0, 0.15);
        }

        body {
            background: linear-gradient(135deg, var(--rice-green) 0%, var(--dark-green) 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
            background: var(--pure-white);
            border-radius: 15px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, var(--rice-green) 0%, var(--dark-green) 100%);
            color: var(--pure-white);
            padding: 2.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .login-header::before {
            content: "🌾";
            position: absolute;
            font-size: 4rem;
            opacity: 0.1;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .login-header h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .login-header p {
            opacity: 0.9;
            font-size: 0.9rem;
            position: relative;
            z-index: 1;
        }

        .login-form {
            padding: 2.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--dark-green);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-group input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-group input:focus {
            border-color: var(--rice-green);
            box-shadow: 0 0 0 3px rgba(47, 93, 47, 0.1);
            outline: none;
        }

        .error-message {
            background: #fee;
            color: #c33;
            padding: 0.8rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
            border-left: 4px solid #c33;
            font-size: 0.9rem;
        }

        .btn-login {
            background: linear-gradient(to right, var(--earth-brown), #a67c52);
            color: var(--pure-white);
            width: 100%;
            padding: 1rem;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        .btn-login:hover {
            background: linear-gradient(to right, #9c6b3a, var(--earth-brown));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 90, 43, 0.3);
        }

        .login-footer {
            text-align: center;
            padding: 1.5rem;
            border-top: 1px solid #eee;
            color: #666;
            font-size: 0.85rem;
        }

        .login-footer a {
            color: var(--rice-green);
            text-decoration: none;
            font-weight: 600;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .back-home {
            display: inline-block;
            margin-top: 1.5rem;
            color: var(--rice-green);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .back-home:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                border-radius: 10px;
            }
            
            .login-header {
                padding: 2rem;
            }
            
            .login-form {
                padding: 2rem;
            }
            
            .login-header h1 {
                font-size: 1.5rem;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-container {
            animation: fadeIn 0.6s ease;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>GreenField Admin</h1>
            <p>Secure Access to Management Dashboard</p>
        </div>
        
        <div class="login-form">
            <?php if($error): ?>
                <div class="error-message">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <form action="process_login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Enter admin username">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>
                
                <button type="submit" class="btn-login">Login to Dashboard</button>
            </form>
            
            <div style="text-align: center; margin-top: 1.5rem;">
                <a href="../index.php" class="back-home">← Back to Main Website</a>
            </div>
        </div>
        
        <div class="login-footer">
            <p>© 2026 GreenField Rice Processing | Admin Access Only</p>
        </div>
    </div>
</body>
</html>