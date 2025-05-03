<?php

namespace App\Modules\Dashboard\Usecase;

use App\Modules\Dashboard\Interface\InterfaceDashboard;
use App\Modules\Dashboard\Repository\RepositoryDashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; // Pastikan ini di-import!

class UsecaseDashboard implements InterfaceDashboard
{
    private $repository;

    public function __construct(RepositoryDashboard $repository)
    {
        $this->repository = $repository;
    }

    public function updateProfile(array $data): array
    {
        // Validasi input
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        if ($validator->fails()) {
            return ['success' => false, 'message' => $validator->errors()->first()];
        }

        // Lanjutkan proses update...
        $updated = $this->repository->updateUserProfile(Auth::id(), $data);

        return $updated ? 
            ['success' => true, 'message' => 'Profile updated successfully'] :
            ['success' => false, 'message' => 'Failed to update profile'];
    }
}