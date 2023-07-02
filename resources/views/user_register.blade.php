<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>User|Login</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="register-form" action="{{ url('user/register')}}" method="post">
                {{ csrf_field() }}
                <h2>User Register</h2>
                <div class="input-group">
                    <input type="text" id="register-name" name="reg_user_name" required>
                    <label for="register-name">Name</label>
                </div>
                <div class="input-group">
                    <input type="text" id="register-phone" name="reg_user_phone" required>
                    <label for="register-phone">Phone Number</label>
                </div>
                <div class="input-group">
                    <input type="text" id="register-email" name="reg_user_email" required>
                    <label for="register-email">Email</label>
                </div>
                <div class="input-group">
                    <input type="text" id="register-Address" name="reg_user_address" required>
                    <label for="register-address">Address</label>
                </div>
                <div class="input-group">
                    <input type="password" id="register-password" name="reg_user_password" required>
                    <label for="register-password">Password</label>
                </div>
                <div class="input-group">
                    <input type="password" id="register-Cpassword" name="reg_user_Cpassword" required>
                    <label for="register-password">Confirm Password</label>
                </div>
                <button type="submit" style="background-color: #17d400 !important;">Register</button>
                <p class="pt-3 text-center" style="font-size: 15px;">  
                <span class="text-muted"> Already have an account? </span>  
                <a href="userloginView"> Login </a>  
            </p> 
            </form>
        </div>
    </div>
</body>

</html>