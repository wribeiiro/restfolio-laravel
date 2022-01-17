<?php

namespace App\Repositories\Contracts;

interface ProfileRepositoryInterface
{
    public function getAllProfile();
    public function getProfileById(int $id);
    public function createProfile(array $profile);
    public function updateProfile(int $id, array $profile);
    public function destroyProfile(int $id);
}
