<?php

namespace Arins\Bo\Repositories\UserAdmin;

use Arins\Repositories\BaseRepository;
use Arins\Bo\Repositories\UserAdmin\UserAdminRepositoryInterface;

class UserAdminRepository extends BaseRepository implements UserAdminRepositoryInterface
{

    //Override parent class [BaseRepository.all()]
    public function all()
    {
        return $this->model->where('bo', true)->get();
    }

}