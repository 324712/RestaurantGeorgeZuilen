<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee_type_users';

    protected $fillable = [
        'user_id',
        'employee_number',
        'address_id',
        'photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address() {
        return $this->belongsTo(Address::class);
    }
}
