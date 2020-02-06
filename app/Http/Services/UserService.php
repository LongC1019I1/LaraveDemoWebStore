<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    protected $userRepo;
    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    function getAll(){
        return $this->userRepo->getAll();
    }


}
