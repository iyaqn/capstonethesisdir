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

.create-account-form-container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 40px;
    border-radius: 10px;
    width: 600px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.create-account-form-container h3 {
    margin-top: 0;
    font-size: 24px;
    color: #333;
}

.create-account-form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.create-account-form input {
    width: 48%;
    padding: 12px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    box-sizing: border-box;
}

.create-account-form input[type="password"],
.create-account-form input[type="email"] {
    width: 100%;
}

.create-account-form label {
    font-size: 14px;
    color: #555;
    margin-top: 10px;
    display: block;
    text-align: left;
}

.create-account-form .password-note {
    font-size: 12px;
    color: #666;
    text-align: left;
    margin-bottom: 10px;
}

.button-group {
    display: flex;
    justify-content: center; /* Centers the buttons horizontally */
    gap: 20px; /* Adds space between the buttons */
    margin-top: 20px;
}

.create-button, .back-button {
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    min-width: 150px; /* Ensures consistent button size */
    text-align: center;
}

.create-button {
    width: 100%;
        padding: 10px;
        background-color: #a4231c;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
}

.create-button:hover {
    background-color: #7a1914;
}

.back-button {
    background-color: #777;
    color: white;
    border: none;
}

.back-button:hover {
    background-color: #666;
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
    <img src="{{ asset('images/cicslogo.png') }}" alt="CICS  Logo" class="logo" />
    <h1>College of Information and Computing Sciences</h1>
    <h2>Capstone Projects and Thesis Papers Directory</h2>
</div>

<div class="password-recovery-container">
    <div class="create-account-form-container">
        <h3>Create Student Account</h3>
        <form class="create-account-form" method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" id="first_name" name="first_name" :value="old('first_name')" placeholder="First Name" required>
            <input type="text" id="last_name" name="last_name" :value="old('last_name')" placeholder="Last Name" required>
            <input type="email" id="email" name="email" :value="old('email')" placeholder="UST Email Address" required>
            <input type="text" id="student_id" name="student_id" :value="old('idnum')" placeholder="Student ID" required>
            <input type="password" id="password" name="password" placeholder="Password" required autocomplete="new-password">
            <input-error :messages="$errors->get('password')"></input-error>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
            <input-error :messages="$errors->get('password_confirmation')" />

            <label class="password-note">
                (Must contain at least 8 characters, a combination of uppercase letters, lowercase letters, and numbers.)
            </label>

            <div class="g-recaptcha" data-sitekey="your-site-key"></div>

            <div class="button-group">
                <button type="submit" class="create-button">Create Account</button>
                <button type="button" class="back-button" onclick="window.location.href='{{ route('student.login') }}'">Back</button>
            </div>
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










