<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('css/email.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Forgot Password</title>
</head>
<body>
     <!-- Top Notification -->
     <div id="topNotification" class="top-notification" role="alert">
        <div class="notification-header">Something Went Wrong</div>
        <span id="notificationMessage"></span>
    </div>

    <div class="container">
        <h2>Forgot Password?</h2>
        <h5>In order to reset your password, enter the email associated with your account for instructions.</h5>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Email address"
                    required 
                    autocomplete="email" 
                    autofocus
                >
                <i class="fas fa-envelope"></i> <!-- Email icon -->
            </div>

            <button type="submit">Send Password Reset Link</button>
        </form>

        <div class="footer">
            Already have an account? <a href="{{ route('login') }}">Sign in</a>
        </div>
    </div>

    <script>
        // Function to show the top notification
        function showTopNotification(message) {
            var notification = document.getElementById('topNotification');
            var messageElement = document.getElementById('notificationMessage');
            messageElement.innerHTML = message;  // Use innerHTML to insert raw HTML content
            notification.classList.add("show");  // Show the notification
            setTimeout(function () {
                notification.classList.remove("show");  // Hide after duration
            }, 3000);  // Duration of the slide-out animation (3 seconds)
        }

        // Laravel blade conditional check for error messages or session messages
        @if ($errors->has('email'))
            // Show notification with the first email error message
            showTopNotification("{!! $errors->first('email') !!}");
        @elseif(session('error'))
            // Show notification with session error message
            showTopNotification("{!! session('error') !!}");
        @endif
    </script>
</body>
</html>