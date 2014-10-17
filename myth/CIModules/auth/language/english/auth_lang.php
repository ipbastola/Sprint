<?php

$lang['auth.did_login']             = 'Welcome back!';
$lang['auth.did_logout']            = 'You have been logged out. Come back soon!';
$lang['auth.did_register']          = 'Account created. Please login.';
$lang['auth.unkown_register_error'] = 'Unable to create user currently. Please try again later.';

$lang['auth.invalid_user']          = 'Invalid credentials. Please try again.';
$lang['auth.invalid_password']      = 'Unable to find a valid login with that password.';
$lang['auth.bruteBan_notice']       = "Your account has had excessive login attempts. To protect the account you must wait 15 minutes before another attempt can be made.";

$lang['auth.remember_label']        = 'Remember me on this device';
$lang['auth.email']                 = 'Email Address';
$lang['auth.password']              = 'Password';
$lang['auth.pass_confirm']          = 'Password (Again)';
$lang['auth.signin']                = 'Sign In';
$lang['auth.register']              = 'Join Us!';

$lang['auth.have_account']          = 'Already a member? <a href="'. site_url( \Myth\Route::named('login') ) .'">Sign In</a>';
$lang['auth.need_account']          = 'Need an Account? <a href="'. site_url( \Myth\Route::named('register') ) .'">Sign Up</a>';
$lang['auth.forgot_pass']           = '<a href="'. site_url( \Myth\Route::named('forgot_pass') ) .'">Forgot your Password?</a>';

$lang['auth.first_name']            = 'First Name';
$lang['auth.last_name']             = 'Last Name';
$lang['auth.username']              = 'Username';

$lang['auth.forgot']                = 'Reset Password';
$lang['auth.forgot_note']           = 'No problem. Enter your email and we will send instructions.';
$lang['auth.send']                  = 'Send';
$lang['auth.pass_code']             = 'Reset Code';
$lang['auth.new_password']          = 'Choose a New Password';

$lang['auth.activate_account']      = 'Activate Account';
$lang['auth.activate']              = 'Activate';
$lang['auth.inactive_account']      = 'Your account is not active.';

$lang['auth.register_subject']      = "Open to activate your account at ". config_item('site.name');
$lang['auth.activate_no_user']      = 'Unable to find a user with those credentials.';
$lang['auth.remind_subject']        = "Here's how to reset your password...";
$lang['auth.need_reset_code']       = 'You must provide the Reset Code.';
$lang['auth.reset_no_user']         = 'Unable to find an account with that email and reset code. Please try again.';
$lang['auth.reset_subject']         = "Your password has been reset.";