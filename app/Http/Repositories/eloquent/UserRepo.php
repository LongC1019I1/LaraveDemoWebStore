<?php


namespace App\Http\Repositories\eloquent;


use App\Http\Repositories\UserRepoInterface;
use App\User;

class UserRepo implements UserRepoInterface
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->paginate(5);
    }

    public function storeOrUpdate($obj)
    {
        $obj->save();
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}
