<!DOCTYPE html>
<html lang="en">

<!--Checks for session cookie and logs in user if backend/login.php authenticates user-->
<?php
    session_start();
    if(isset($_SESSION["email"])) {
        header("Location: index.php");
    }

    $errorState = "";
    if($_GET["valid"] == "false") {
        $errorState = "is-invalid";
    }
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrowdTutor | Login</title>

    <!-- Reboot core CSS -->
    <link href="../styles/reboot.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../styles/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../styles/login.css" rel="stylesheet">
</head>
<body>


    <div class="main">
        <div class="login-form">
            <div>
                <h1 class="login-header pt-5">Login</h1>
                <form class="form-label" action="../backend/login.php">
                    <label class="form-label">Email:</label>
                    <input type="text" value="<?php echo $_SESSION["email"]; ?>" name="email" class="form-inputs" />
                    <hr class="form-hr" />

                    <label>Password:</label>
                    <input type="text" name="password" class="form-inputs <?php echo $errorState; ?>" />
                    <hr class="form-hr" />
                    <br />
                    <input type="submit" value="LOGIN" class="form-btn" />
                </form>
            </div>
            <div>
                <p>Don&apos;t have an account?</p>
                <a href="create-account.html" class="create-btn">Create an Account</a>
            </div>
        </div>
    </div>
</body>
</html>