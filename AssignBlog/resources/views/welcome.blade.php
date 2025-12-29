<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        .form-section {
            display: block;
        }
        
        .hidden {
            display: none;
        }
        
        .input-field {
            margin-bottom: 20px;
        }
        
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        input:focus {
            outline: none;
            border-color: #007bff;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        button:hover {
            background: #0056b3;
        }
        
        .switch {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
        
        .switch-btn {
            background: none;
            color: #007bff;
            border: none;
            padding: 0;
            cursor: pointer;
            text-decoration: underline;
            font-size: 16px;
            width: auto;
        }
        
        .switch-btn:hover {
            color: #0056b3;
            background: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sign In Form -->
        <div id="signin-section" class="form-section">
            <h1>Sign In</h1>
            <form action="/login" method="POST">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Sign In</button>
            </form>
            <div class="switch">
                Don't have an account? 
                <button class="switch-btn" onclick="showSignUp()">Sign Up</button>
            </div>
        </div>

        <!-- Sign Up Form -->
        <div id="signup-section" class="form-section hidden">
            <h1>Sign Up</h1>
            <form action="/register" method="POST">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Create Account</button>
            </form>
            <div class="switch">
                Already have an account? 
                <button class="switch-btn" onclick="showSignIn()">Sign In</button>
            </div>
        </div>
    </div>

    <script>
        // Show sign in form
        function showSignIn() {
            document.getElementById('signin-section').classList.remove('hidden');
            document.getElementById('signup-section').classList.add('hidden');
        }

        // Show sign up form
        function showSignUp() {
            document.getElementById('signup-section').classList.remove('hidden');
            document.getElementById('signin-section').classList.add('hidden');
        }
    </script>
</body>
</html>