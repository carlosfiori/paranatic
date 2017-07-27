<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Mail Driver
	|--------------------------------------------------------------------------
	|
	| Laravel supports both SMTP and PHP's "mail" function as drivers for the
	| sending of e-mail. You may specify which one you're using throughout
	| your application here. By default, Laravel is setup for SMTP mail.
	|
	| Supported: "smtp", "mail", "sendmail", "mailgun", "mandrill", "log"
	|
	*/

	'driver' => env('MAIL_DRIVER', 'smtp'),

	'host' => env('MAIL_HOST', 'smtp.gmail.com'),
	'port' => env('MAIL_PORT', 587),
	'from' => ['address' => 'hugohfsouza@gmail.com', 'name' => 'hugo henrique fumero de souza'],
	'encryption' => 'tls',
	'username' => 'hugohfsouza@gmail.com',
	'password' => 'hugo20namorando',
	'sendmail' => '/usr/sbin/sendmail -bs',
	'pretend' => true,


];
