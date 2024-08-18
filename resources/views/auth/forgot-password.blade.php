<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: url('{{ asset("images/frassbg.png") }}') no-repeat center center fixed;
        background-size: cover;
        color: #333;
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .header {
        background-color: #a4231c;
        padding: 20px;
        text-align: center;
        color: white;
    }

    .header img {
        width: 80px;
    }

    .header h1 {
        margin: 0;
        font-size: 24px;
        color: white;
    }

    .header h2 {
        margin: 5px 0 20px;
        font-size: 18px;
        color: white;
    }

    .password-recovery-container {
        flex-grow: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .recovery-form-container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 40px;
        border-radius: 10px;
        width: 400px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .recovery-form-container h3 {
        margin-top: 0;
        font-size: 24px;
        color: #333;
    }

    .recovery-form input {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .reset-button {
        width: 100%;
        padding: 12px;
        background-color: #a4231c;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .reset-button:hover {
        background-color: #7a1914;
    }

    .back-to-login {
        display: block;
        margin-top: 20px;
        font-size: 14px;
        color: #0066cc;
        text-decoration: none;
    }

    .back-to-login:hover {
        text-decoration: underline;
    }

    .footer-bar {
        background-color: #a4231c;
        color: white;
        text-align: center;
        padding: 10px;
        font-size: 12px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .footer a {
        color: white;
        text-decoration: none;
        margin: 0 5px;
    }
    </style>





  <div class="header">
    <img src="{{ asset('images/cicslogo.png') }}" alt="CICS Logo" class="logo" />
    <h1>College of Information and Computing Sciences</h1>
    <h2>Capstone Projects and Thesis Papers Directory</h2>
</div>

<div class="password-recovery-container">
    <div class="recovery-form-container">
        <h3>Password Recovery</h3>
        <form class="recovery-form" method="POST" action="{{ route('password.email') }}">
            @csrf
            <label for="email">Email Address:</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

            <button type="submit" class="reset-button">
                Reset Password
            </button>
        </form>
        <a href="{{ route('student.login') }}" class="back-to-login">Return to login page</a>
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
