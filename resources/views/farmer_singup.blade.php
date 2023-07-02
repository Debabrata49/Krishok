<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Farmer|Register</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="register-form" action="{{ url('register')}}" method="post">
                {{ csrf_field() }}
                <h2>Farmer Register</h2>
                <div class="input-group">
                    <input type="text" id="register-name" name="reg_name" required>
                    <label for="register-name">Name</label>
                </div>
                <div class="input-group">
                    <input type="text" id="register-aadhaar" name="reg_aadhar" required>
                    <label for="register-aadhaar">Aadhaar Number</label>
                </div>
                <div class="input-group">
                    <input type="text" id="register-phone" name="reg_phone" required>
                    <label for="register-phone">Phone Number</label>
                </div>
                <div class="input-group">
                    <input type="text" id="register-email" name="reg_email" required>
                    <label for="register-email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" id="register-password" name="reg_password" required>
                    <label for="register-password">Password</label>
                </div>
                <button type="submit" style="background-color: #17d400 !important;">Register</button>
                <p class="form-link" id="login-link">Already have an account? <a href="farmer_login">Login here.</a></p>
            </form>
        </div>
    </div>
</body>

</html>