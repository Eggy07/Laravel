<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students'; // Match DB table name

    protected $primaryKey = 'id';  // Use the default primary key (id)
    public $timestamps = true; // Disable timestamps if not using created_at/updated_at

    protected $fillable = [
        'email',
        'password',
        'fname',
        'lname',
        'dob',
        'phone',
        'mobile',
        'parent_id',
        'date_of_join',
        'status',
        'last_login_date',
        'last_login_ip'
    ];
}
