<?php

return [
	'~^user$~' => [\Casino\Controllers\UsersController::class, 'userConf'],
	'~^signIn$~' => [\Casino\Controllers\UsersController::class, 'signIn'],
	'~^signUp$~' => [\Casino\Controllers\UsersController::class, 'signUp'],
    '~^$~' => [\Casino\Controllers\MainController::class, 'main'],
];
