<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrowdTutor | Create Account</title>

    <!-- Reboot core CSS -->
    <link href="styles/reboot.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/create-account.css" rel="stylesheet">
</head>
<body>
    <div class='main'>
        <div class='left-panel'></div>
        <div class='right-panel'>
            <div class='create-account-form-base'>
                <h1 class='create-header'>
                    Create Account
                </h1>
                <form action="create-acc.php" method="POST">
                    <label class='form-label'>
                        First name
                        <b class='red-text'>*</b>
                    </label>
                    <input
                        type="text"
                        name="firstName"
                        class='form-inputs'
                        placeholder="Type your first name"
                    />
                    <hr class='form-hr' />

                    <label class='form-label'>
                        Last name
                        <b class='red-text'>*</b>
                    </label>
                    <input
                        type="text"
                        name="lastName"
                        class='form-inputs'
                        placeholder="Type your last name"
                    />
                    <hr class='form-hr' />

                    <label class='form-label'>
                        Email <b class='red-text'>*</b>
                    </label>
                    <input
                        type="text"
                        name="email"
                        class='form-inputs'
                        placeholder="Enter your email"
                    />
                    <hr class='form-hr' />
                    <br />

                    <label class='form-label'>
                        Password <b class='red-text'>*</b>
                    </label>
                    <input
                        type="text"
                        name="pass"
                        class='form-inputs'
                        placeholder="Type your password"
                    />
                    <hr class='form-hr' />

                    <label class='form-label'>
                        Confirm Password
                        <b class='red-text'>*</b>
                    </label>
                    <input
                        type="text"
                        name="passConfirm"
                        class='form-inputs'
                        placeholder="Re-type your password"
                    />
                    <hr class='form-hr' />
                    <br />
                    <input
                        type="submit"
                        value="Create Account"
                        class='form-btn'
                    />
                </form>
                <div class="text-center">
                    <p class="pt-4">Back to Login Page</p>
                    <a href="login.html" class="create-btn">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>