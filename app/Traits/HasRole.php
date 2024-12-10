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
}
