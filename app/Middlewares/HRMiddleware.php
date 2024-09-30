<?php

namespace Middlewares;

use Src\Auth\Auth;

class HrMiddleware
{
    public function handle()
    {
        if (Auth::role() !== "hr")
            app()->route->redirect("/login");
    }
}