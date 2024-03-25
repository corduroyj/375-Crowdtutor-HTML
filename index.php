<?php
    include "includes/auth.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrowdTutor | Profile</title>

    <!-- Reboot core CSS -->
    <link href="styles/reboot.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/index.css" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="back-gradient"></div>
        <div class="profile-card">
            <div class="container">
                <div class="row gutters-sm py-3">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="/images/blank-avatar.png" class="rounded-circle" alt="" width="150">
                                    <div class="mt-3">
                                        <!-- PHP Insert Name -->
                                        <h4>John Doe</h4>
                                        <!-- PHP insert user Email into mailto -->
                                        <a href="mailto:someone@example.com" class="btn btn-outline-primary">Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h5 class="mb-0">Course List</h5>
                                </li>
                                <!-- Use JS to insert courses here -->
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <p class="mb-0">CSCI 375</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <p class="mb-0">CSCI 375</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <p class="mb-0">CSCI 375</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <p class="mb-0">CSCI 375</p>
                                </li>
                            </ul>
                            <div class="text-center py-2">
                                <a class="btn btn-info" target="" href="">Edit Course List</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body text-start">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0 ">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <!-- PHP insert user full name -->
                                        John Doe
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <!-- PHP Insert user Email -->
                                        email@gmail.com
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <!-- PHP Insert Number -->
                                        (239) 816-9029
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <a class="btn btn-info" target="" href="">Edit User Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-start">
                                <div class="row">
                                    <h5>Tutoring Sessions</h5>
                                </div>
                                <hr>
                                <div class="row align-items-center">
                                    <div class="col-sm-5">
                                        <!-- Generate these rows from db information -->
                                        <h6 class="mb-0">April 22 | CSCI 375</h6>
                                    </div>
                                    <div class="col-sm-7 d-flex justify-content-around">
                                        <a class="btn btn-info btn-sm set-size" target="" href="">Confirm</a>
                                        <a class="btn btn-danger btn-sm set-size" target="" href="">Refuse</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row align-items-center">
                                    <div class="col-sm-5">
                                        <!-- Generate these rows from db information -->
                                        <h6 class="mb-0">April 27 | MATH 121</h6>
                                    </div>
                                    <div class="col-sm-7 d-flex justify-content-around">
                                        <a class="btn btn-primary btn-sm set-size" target="" href="">View</a>
                                        <a class="btn btn-warning btn-sm set-size" target="" href="">Cancel</a>
                                    </div>
                                </div>
                                <hr>
                                
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <a class="btn btn-info" target="" href="">Schedule New Session</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>