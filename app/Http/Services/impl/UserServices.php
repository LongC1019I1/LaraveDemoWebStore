<?php


namespace App\Http\Services\impl;


use App\Http\Repositories\eloquent\UserRepo;
use App\Http\Services\UserServicesInterface;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserServices implements UserServicesInterface
{
    protected $userRepo;
    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    function getAll(){
        return $this->userRepo->getAll();
    }


    public function create($request)
    {
        $user = new User();
        $user->fill($request->all());
        $user['password'] = Hash::make($request->password);
        $this->userRepo->storeOrUpdate($user);
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
