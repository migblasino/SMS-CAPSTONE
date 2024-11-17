<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/verify.css') }}">
    <title>Verify Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="card">
        <div class="check-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 6L9 17l-5-5"/>
            </svg>
        </div>
        <h2>Verify Email Address</h2>
        <div class="divider"></div>
        <p>Please check your email for a verification link. If you don't see it, you can request a new one below.</p>

        <!-- Form for resending the verification email -->
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf  <!-- CSRF token for security -->
            <button type="submit" class="verify-button">Resend Verification Email</button>
        </form>
    </div>
</body>
</html>
