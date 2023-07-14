<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Farmer|Login</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="login-form" action="{{ url('login')}}" method="post">
                @if(session()->has('success'))
                    <div class="alert alert-success" id="success-alert">{{ session('success') }}</div>
                     <p id="timer" hidden></p>
                @endif
                {{ csrf_field() }}
                <h2>Farmer Login</h2>
                @if (session('status'))
                    <div class="button_danger_div">
                        <p class="button_danger">{{ session('status') }}</p>
                    </div>
                @endif
                <div class="input-group">
                    <input type="text" id="login-username" name="userid" required>
                    <label for="login-username" style="background-color:white;padding:4px">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" id="login-password" name="userpass" required >
                    <label for="login-password" style="background-color:white;padding:4px">Password</label>
                </div>
                <button type="submit" style="background-color: #17d400 !important;">Login</button>
                <p class="form-link" id="register-link">Don't have an account? <a href="farmer_singup">Register here.</a></p>
            </form>
        </div>
    </div>
</body>
<script>
   var alertElement = document.getElementById('success-alert');
   var duration = 5000; // Duration in milliseconds (1 minute)

   // Start the timer when the alert is displayed
   var startTime = Date.now();

   // Update the timer every second
   var intervalId = setInterval(function() {
      var currentTime = Date.now();
      var elapsedTime = Math.floor((currentTime - startTime) / 1000); // Elapsed time in seconds
      var timerElement = document.getElementById('timer');
      if (timerElement) {
         timerElement.innerText = 'Time: ' + elapsedTime + ' seconds';
      }
   }, 1000);

   // Hide the alert after the specified duration
   setTimeout(function() {
      if (alertElement) {
         alertElement.style.display = 'none';
         clearInterval(intervalId); // Stop the timer
      }
   }, duration);
</script>
</html>