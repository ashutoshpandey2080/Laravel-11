<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //In Laravel, an invokable controller is a controller with only one method called __invoke(). It's used when a controller is responsible for handling a single action. Instead of defining multiple methods inside the controller, you define just the __invoke method, and Laravel will automatically call it when the route points to that controller.
        //It keeps the code clean and simple for single-action routes.

        return view('testing');
    }
}
