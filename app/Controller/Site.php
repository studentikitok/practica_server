<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Role;
use Model\Employee;
use Model\Subunit;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }


    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        $roles = Role::all();
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup', ['roles' => $roles]);
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function employee(Request $request): string
    {
        if($request->method === 'POST'){
            $properties = [
                "login" => $request->all()["login"],
                "password" => $request->all()["password"],
                "role" => 2
            ];

            if (User::create($properties)) {
                app()->route->redirect('/employee');
            }
        }
        
        $users = User::all();
        $roles = Role::all();
        $subunits = Subunit::all();

        return new View('site.employee', [
            'subunits' => $subunits, 
            'users' => $users, 
            'roles' => $roles
        ]);
    }

    public function emp(Request $request): string
    {
        if($request->method === 'POST'){
            $properties = [
                "surname" => $request->all()["surname"],
                "name" => $request->all()["name"],
                "patronym" => $request->all()["patronym"],
                "gender" => $request->all()["gender"],
                "date_of_birth" => $request->all()["date_of_birth"],
                "address" => $request->all()["address"],
                "age" => $request->all()["age"],
            ];

            if (Employee::create($properties)) {
                app()->route->redirect('/hello');
            }
        }
        
        $users = User::all();
        $roles = Role::all();
        $subunits = Subunit::all();

        return new View('site.emp', [
            'subunits' => $subunits, 
            'users' => $users, 
            'roles' => $roles
        ]);
    }

    public function subunit(Request $request): string
    {
        $subunits = Subunit::all();
        if ($request->method === 'POST' && Subunit::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.subunit', ['subunits' => $subunits]);
    }

    public function subunit_sel(Request $request): string
    {
        $subunits = Subunit::all();

        if (isset($request->all()["subdivision"])) {
            $employee = Employee::where("subunit_id", $request->all()["subdivision"])->get();

            return new View('site.subunit_sel', [
                'message' => 'hello working',
                "subdivisions" => $subunits,
                "employee" => $employee
            ]);
        }
    }

    public function assign_an_employee(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.assign_an_employee');
        }
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }

        return new View('site.hello', ['message' => 'hello working']);
    }


    public function calculate(Request $request): string
    {
        $subunits = Subunit::all();

        if (isset($request->all()["subdivision"])) {
            $employee = Employee::where("subunit_id", $request->all()["subdivision"])->get();

            return new View('site.calculate', [
                'message' => 'hello working',
                "subdivisions" => $subunits,
                "employee" => $employee
            ]);
        }

        return new View('site.calculate', [
            'message' => 'hello working',
            "subdivisions" => $subunits,
        ]);

    }
}
