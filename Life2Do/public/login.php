<?php 
    require_once('../private/init.php');

    $title = "Login";
    include( SHARED_PATH . '/header.php');
 ?>
        <div class="container">
            <i class="material-icons mt-100 center-align text-lighten-2 red-text large" style= "display: block;">account_circle</i>
            <h3 class="center-align text-lighten-2 red-text">Login</h3>
            <div class="row">
                <form class="col s12 push-s3">
                <div class="row">
                    <div class="input-field col s6">
                    <input id="username" type="text" class="validate">
                    <label for="username">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <div class="row">
                        <div class="input-field col s12">
                            <a class="waves-effect waves-light btn btn-large col s12 red lighten-1">Login</a>
                        </div>
                     </div>
                </div>
            </div>
            <p style="margin-top: -20px; margin-bottom: 30px;" >
                <label>
                    <input type="checkbox" />
                    <span>Remember Me</span>
                </label>
            </p>
            </div>
            </form>
         </div>
<?php include( SHARED_PATH . '/footer.php'); ?>