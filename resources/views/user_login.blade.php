<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User|Login</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="login-form" action="{{ url('user/login')}}" method="post">
                @if(session()->has('fail'))
                    <div class="alert alert-danger" id="danger-alert">{{ session('fail') }}</div>
                     <p id="timer" hidden></p>
                @endif
                {{ csrf_field() }}
                <h2>User Login</h2>
                <div class="input-group">
                    <input type="text" id="login-username" name="userid" required>
                    <label for="login-username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" id="login-password" name="userpass" required >
                    <label for="login-password">Password</label>
                </div>
                <button type="submit" style="background-color: #17d400 !important;">Login</button>
                <p class="pt-3 text-center" style="font-size: 15px;">  
                    <span class="text-muted"> Not a member? </span>  
                    <a href="userRegisterView"> Sign up </a>  
                </p> 
            </form>
        </div>
    </div>
</body>
<script>
   var alertElement = document.getElementById('danger-alert');
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