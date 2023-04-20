@php
    session_start();
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Check if username and password are correct
        if ($username === 'admin' && $password === 'password') {
            // Set session variables
            $_SESSION['username'] = $username;
            // Redirect to home page
            header('Location: home.php');
            exit();
        } else {
            // Display error message
            echo '<p>Invalid username or password!</p>';
        }
    }
    
@endphp


<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

{{-- 
<script>
    // This is just an example of how you can use JavaScript to validate the login form.
    // You can customize this to fit your needs.

    const form = document.querySelector('form');
    const username = document.getElementById('username');
    const password = document.getElementById('password');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        if (username.value.trim() === '') {
            alert('Please enter your username.');
        } else if (password.value.trim() === '') {
            alert('Please enter your password.');
        } else {
            form.submit();
        }
    });
</script> --}}

</html>
