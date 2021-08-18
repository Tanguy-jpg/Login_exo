<?php
    if(isset($_GET['login_err'])){
        $err =htmlspecialchars($_GET['login_err']);

        switch($err)
        {
            case 'password':
            ?>
            <div class="alert alert-danger">
                <strong>Error</strong>  incorrect password
            </div>
            <?php
            break;

            case 'email':
            ?>
            <div class="alert alert-danger">
                <strong>Error</strong> incorrect email
            </div>
            <?php
            break;

            case 'already':
            ?>
            <div class="alert alert-danger">
                <strong>Error</strong> account does not exist
            </div>
            <?php
            break;
        }
    }
require_once('html/1-start.html');
require_once('html/2-sign-in-page.html');
require_once('html/end.html');