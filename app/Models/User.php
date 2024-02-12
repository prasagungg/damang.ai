<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'date_of_birth', 'gender'];

    public function updateUser(string $name, int $age, string $gender): void {
        // Update user logic here
        // This could be an Eloquent model, so you might want to use Eloquent's built-in update methods
    }
}
