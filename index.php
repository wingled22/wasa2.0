<?php
    session_start();
    require_once "session.php";
    
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
        <link rel="stylesheet" href="~/../plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="~/../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="~/../dist/css/adminlte.min.css">
    </head>

    <body class="login-page" style="min-height: 469.383px;">
        
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a  class="h1"><b>Admin Login</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <!-- <form action="login.php" method="POST">
                            <div class="input-group mb-3">
                                <input type="username" class="form-control" placeholder="Username" required>
                            
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                    
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div> 
                            
                    </form>-->
                    <form action="login.php" method="POST">
                        <div class="card-body" style="">
                            
                            <!-- <legend>Personal information</legend> -->

                                <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <!-- <label for="exampleInputEmail1">First Name</label> -->
                                        <input type="text" class="form-control" id="" placeholder="Username" name="username" required>
                                    </div>
                                </div>
                                </div>


                               

                                <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <!-- <label for="exampleInputEmail1">First Name</label> -->
                                        <input type="password" class="form-control" id="" placeholder="Password" name="pass" required>
                                        <!-- <select class="form-control" name="category" required>
                                            <option value="Bachelor" >Bachelor</option>
                                            <option value="Masteral" >Masteral</option>
                                    </select> -->
                                    </div>
                                </div>
                                
                                </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Log in</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="~/../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="~/../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="~/../dist/js/adminlte.min.js"></script>
    </body>
</html>