<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/JSBlade', function (){
    return view('JSinBlade');
})->name('JSBlade');

Route::get('/Home', function (){
    return view('home');
})->name('Home');

Route::get('/passvariable', function () {
    // $name = 'Alex Adam';

    //First way of sending data
    // return view('PasingVariables', [
    //     'users' => $name,
    //     'city' => 'Delhi',
    //     'message' => '<script>alert("User Info")</script>'
    // ]);

    //Second way of passing data, prefer this
    // return view('PasingVariables')
    // ->with('users', $name)
    // ->with('city', 'Mumbai')
    // ->with('message', '<script>alert("User Info")</script>');

    //Third way of passing data
    // return view('PasingVariables')
    // ->withUsers($name)
    // ->withCity('Mumbai')
    // ->withMessage('<script>alert("User Info")</script>');

    $users = [
    1 => [
        'name' => 'Alex Adam',
        'city' => 'Mumbai',
        'phone' => '9876543210',
    ],
    2 => [
        'name' => 'Sarah Khan',
        'city' => 'Delhi',
        'phone' => '9123456780',
    ],
    3 => [
        'name' => 'John Doe',
        'city' => 'Bangalore',
        'phone' => '9988776655',
    ],
    4 => [
        'name' => 'Emily Smith',
        'city' => 'Chennai',
        'phone' => '9871234567',
    ],
    5 => [
        'name' => 'David Brown',
        'city' => 'Hyderabad',
        'phone' => '9765432109',
    ],
];

    return view('PasingVariables', ['users' => $users]);

})->name('passvariable');


Route::get('/user/{id}', function($id) {
    $users = [
        1 => [
            'name' => 'Alex Adam',
            'city' => 'Mumbai',
            'phone' => '9876543210',
        ],
        2 => [
            'name' => 'Sarah Khan',
            'city' => 'Delhi',
            'phone' => '9123456780',
        ],
        3 => [
            'name' => 'John Doe',
            'city' => 'Bangalore',
            'phone' => '9988776655',
        ],
        4 => [
            'name' => 'Emily Smith',
            'city' => 'Chennai',
            'phone' => '9871234567',
        ],
        5 => [
            'name' => 'David Brown',
            'city' => 'Hyderabad',
            'phone' => '9765432109',
        ],
    ];

    // Check if user ID exists in the array
    abort_if(!isset($users[$id]), 404);

    $user = $users[$id];
    return view('user', ['user' => $user]); // Pass the user data to the view
})->name('view.user');
