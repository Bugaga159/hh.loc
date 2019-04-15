<?php

return [
    '~^admin/(\d+)/edit/user$~' => [\Casino\Controllers\AdminController::class, 'editUser'],
    '~^admin$~' => [\Casino\Controllers\AdminController::class, 'main'],
	'~^convert$~' => [\Casino\Controllers\UsersController::class, 'convertMoney'],
	'~^user/(\d+)/edit$~' => [\Casino\Controllers\UsersController::class, 'edit'],
	'~^user$~' => [\Casino\Controllers\UsersController::class, 'userInfo'],
	'~^prize~' => [\Casino\Controllers\MainController::class, 'prize'],
	'~^signIn$~' => [\Casino\Controllers\UsersController::class, 'signIn'],
	'~^signUp$~' => [\Casino\Controllers\UsersController::class, 'signUp'],
    '~^$~' => [\Casino\Controllers\MainController::class, 'main'],
];
