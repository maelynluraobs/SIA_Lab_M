<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model {
    protected $table = 'profile';
    protected $fillable = ['username', 'password'];
}