<?php

namespace App\Http\Controllers;

use App\Http\Services\UserServiceInterface;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAll();
      return view('admin.user.list',compact('users'));
    }
}
