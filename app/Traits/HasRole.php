<?php

namespace App\Traits;

use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasRole
{
    public function roles(): BelongsToMany
    {
        return $this->BelongsToMany(Role::class, 'role_user');
    }

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function isPartner()
    {
        return $this->hasRole('partner');
    }

    public function hasRole($roleName): bool
    {
        return $this->roles()->where('name', $roleName)->exists();
    }
}
