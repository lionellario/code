<?php

// please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
// in the application's header (in views/_templates/header.php)

$setlogin_lang = array(

// Login & Registration classes
'Host error'				=> 'Failed to reach the host.',
'Database error'			=> 'Database connection problem.',
'Empty username'			=> 'Username field was empty',
'Username exist'			=> 'Sorry, that username is already taken. Please choose another one.',
'Invalid username'			=> 'Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters',
'Empty password'			=> 'Password field was empty',
'Bad confirm password'		=> 'Password and password repeat are not the same',
'Bad login'					=> 'ERROR: either your email address or your password is wrong, please just retype.',
'Empty field'				=> 'Sorry, there is at least one empty field, check the fields please.',
'Password too short'		=> 'Password has a minimum length of 6 characters',
'Email exist'				=> 'This email address is already registered. Please use the "I forgot my password" page if you don\'t remember it.',
'Invalid email'				=> 'Your email address is not in a valid email format',

// Registration class
'Wrong captcha'				=> 'Captcha was wrong!',
'Username bad length'		=> 'Username cannot be shorter than 2 or longer than 64 characters',
'Empty email'				=> 'Email cannot be empty',
'Email too long'			=> 'Email cannot be longer than 64 characters',
'Verification mail error'	=> 'Sorry, we could not send you an verification mail. Your account has NOT been created.',
'Verification mail sent'	=> 'Your account has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.',
'Verification mail not sent'=> 'Verification Mail NOT successfully sent! Error: ',
'Registration failed'		=> 'Sorry, your registration failed. Please go back and try again.',
'Activation successful'		=> 'Activation was successful! You can now log in!',
'Activation error'			=> 'Sorry, no such id/verification code combination here...',

// Login class
'Invalid cookie'			=> 'Invalid cookie',
'User not exist'			=> 'This user does not exist',
'Wrong password'			=> 'Wrong password. Try again.',
'Account not activated'		=> 'Your account is not activated yet. Please click on the confirm link in the mail.',
'Logged out'				=> 'You have been logged out.',
'Same username'				=> 'Sorry, that username is the same as your current one. Please choose another one.',
'Same email'				=> 'Sorry, that email address is the same as your current one. Please choose another one.',
'Username changed'			=> 'Your username has been changed successfully. New username is ',
'Username change failed'	=> 'Sorry, your chosen username renaming failed',
'Email changed'				=> 'Your email address has been changed successfully. New email address is ',
'Email change failed'		=> 'Sorry, your email changing failed.',
'Password changed'			=> 'Password successfully changed!',
'Password changed failed'	=> 'Sorry, your password changing failed.',
'Wrong old password'		=> 'Your OLD password was wrong.',
'Password mail sent'		=> 'Password reset mail successfully sent!',
'Password mail not sent'	=> 'Password reset mail NOT successfully sent! Error: ',
'Reset link has expired'	=> 'Your reset link has expired. Please use the reset link within one hour.',
'Empty link parameter'		=> 'Empty link parameter data.',

// Login form
'Username'					=> 'Username',
'Password'					=> 'Password',
'Remember me'				=> 'Keep me logged in (for 2 weeks)',
'Log in'					=> 'Log in',
'Register new account'		=> 'Register new account',
'I forgot my password'		=> 'I forgot my password',

// Register form
'Register username'			=> 'Username (only letters and numbers, 2 to 64 characters)',
'Register email'			=> 'User\'s email (please provide a real email address, you\'ll get a verification mail with an activation link)',
'Register password'			=> 'Password (min. 6 characters!)',
'Register password repeat'	=> 'Password repeat',
'Register captcha'			=> 'Please enter those characters',
'Register'					=> 'Register',
'Back to login'				=> 'Back to Login Page',

// Password reset request
'Password reset request'	=> 'Request a password reset. Enter your username and you\'ll get a mail with instructions:',
'Reset my password'			=> 'Reset my password',
'New password'				=> 'New password',
'Repeat new password'		=> 'Repeat new password',
'Submit new password'		=> 'Submit new password',

// Edit account
'Edit title'				=> 'You are logged in and can edit your credentials here',
'Old password'				=> 'Your OLD Password',
'New username'				=> 'New username (username cannot be empty and must be azAZ09 and 2-64 characters)',
'New email'					=> 'New email',
'currently'					=> 'currently',
'Change username'			=> 'Change username',
'Change email'				=> 'Change email',
'Change password'			=> 'Change password',

// Logged in
'You are logged in as'		=> 'You are logged in as ',
'Logout'					=> 'Logout',
'Edit user data'			=> 'Edit user data',
'Profile picture'			=> 'Your profile picture (from gravatar):'

);