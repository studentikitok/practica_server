<?php
return [
   //Класс аутентификации
   'auth' => \Src\Auth\Auth::class,
   //Клас пользователя
   'identity' => \Model\User::class,
   //Классы для middleware
   'routeMiddleware' => [
       'auth' => \Middlewares\AuthMiddleware::class,
       "admin" => \Middlewares\AdminMiddleware::class,
       "hr" => \Middlewares\HrMiddleware::class
   ],
   'validators' => [
    'required' => \Validators\RequireValidator::class,
    'unique' => \Validators\UniqueValidator::class
   ],
   'routeAppMiddleware' => [
    'trim' => \Middlewares\TrimMiddleware::class,
    'csrf' => \Middlewares\CSRFMiddleware::class,
    'specialChars' => \Middlewares\SpecialCharsMiddleware::class
   ]
];
