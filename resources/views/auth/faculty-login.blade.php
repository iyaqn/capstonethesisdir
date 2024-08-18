
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset("images/frassbg.png") }}') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 70vh;
        }


        .header {
            background-color: #a4231c;
            padding: 20px;
            text-align: center;
        }

        .header img {
            width: 80px;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            color: white;
        }

        .header h3 {
            margin: 5px 0 20px;
            font-size: 16px;
            color: white;
        }

        .login-content {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin-top: -20px;
        }

        .login-form label {
            text-align: left;
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .forgot-password {
            display: block;
            margin-bottom: 20px;
            color: #a4231c;
            text-decoration: none;
        }

        .login-button {
            width: 100%;
        padding: 10px;
        background-color: #a4231c;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        .login-button:hover {
            background-color: #7a1914;
        }

        .footer-bar {
            background-color: #a4231c;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer {
            font-size: 12px;
            color: white;
        }

        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 5px;
        }
    </style>


        <div class="header">
            <img src="{{ asset('images/cicslogo.png') }}" alt="CICS Logo">
            <h2>College of Information and Computing Sciences</h2>
            <h3>Capstone Projects and Thesis Papers Directory</h3>
        </div>
        <div class="login-container">
        <div class="login-content">
            <h1 style="color: black;">Faculty Login</h1>
            <form method="POST" action="{{ route('faculty.login') }}" class="login-form">
                @csrf
                <div>
                    <label for="email">Email Address:</label>
                    <input id="email" type="email" name="email" required autofocus autocomplete="username">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                </div>
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot password?</a>
                <button type="submit" class="login-button">Login</button>
            </form>
        </div>
    </div>

    <div class="footer-bar">
        <div class="footer">
            <a href="#">Terms of Use</a> | 
            <a href="#">Privacy Policy</a> | 
            <a href="#">UST website</a> |
            <a href="{{ route('student.login') }}">Student Log In</a> | 
            <a href="{{ route('admin.login') }}">Admin Log In</a>
        </div>
        <p>UST Blessed Pier Giorgio Frassati Building, España Blvd, Sampaloc, Manila, 1000 Metro Manila</p>
    </div>

