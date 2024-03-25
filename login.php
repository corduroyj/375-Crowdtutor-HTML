<?php
    session_start();
    $_SESSION['logged'] = 0;

    if (isset($_POST['submit'])) {
        if (
            $_POST['username'] == "royj" && 
            $_POST['password'] == "royisgreat"
        ) {
            $_SESSION['logged'] = 1;
            header ("Refresh: 5; URL=" . $_POST['redirect'] . "");
            echo "You are being redirected to your original page request!<br>";
            echo "(If your browser doesn't support this, " . "<a href=\"" . $_POST['redirect'] . "\">Click here</a>)";
        } else {
                //If sent from this page with bad login, Load in Login Page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrowdTutor | Login</title>

    <!-- Reboot core CSS -->
    <link href="styles/reboot.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/login.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="login-form">
            <div>
                <h1 class="login-header pt-5">Login</h1>
                <p>Invalid Usernamd and/or Password<br></p>
                <form class="form-label" action="login.php" method="post">
                    <input type="hidden" name="redirect" value="
                        <?php echo $_GET['redirect']; ?>
                    ">
                    <label class="form-label">Username:</label>
                    <input type="text" name="username" class="form-inputs" />
                    <hr class="form-hr" />

                    <label>Password:</label>
                    <input type="text" name="password" class="form-inputs" />
                    <hr class="form-hr" />
                    <br />
                    <input type="submit" name="submit" value="LOGIN" class="form-btn" />
                </form>
            </div>
            <div>
                <p>Don&apos;t have an account?</p>
                <a href="create-account.php" class="create-btn">Create an Account</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
        }
    } else {
        //if sent here without bad login, open login page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrowdTutor | Login</title>

    <!-- Reboot core CSS -->
    <link href="styles/reboot.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/login.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="login-form">
            <div>
                <h1 class="login-header pt-5">Login</h1>
                <form class="form-label" action="login.php" method="post">
                    <input type="hidden" name="redirect" value="
                        <?php echo $_GET['redirect']; ?>
                    ">
                    <label class="form-label">Username:</label>
                    <input type="text" name="username" class="form-inputs" />
                    <hr class="form-hr" />

                    <label>Password:</label>
                    <input type="text" name="password" class="form-inputs" />
                    <hr class="form-hr" />
                    <br />
                    <input type="submit" name="submit" value="LOGIN" class="form-btn" />
                </form>
            </div>
            <div>
                <p>Don&apos;t have an account?</p>
                <a href="create-account.php" class="create-btn">Create an Account</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    }
?>