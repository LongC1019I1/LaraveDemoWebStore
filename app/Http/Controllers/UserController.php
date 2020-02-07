<?php

namespace App\Http\Controllers;


use App\Http\Services\impl\UserServices;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;
    public function __construct(UserServices $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        //userService sẽ tiêm sự phụ thuộc vào controller (thông qua UserServiceInterface)
        $users = $this->userService->getAll();
       return view('admin.users.list',compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }


}
