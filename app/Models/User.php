<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
 protected $table = 'tab_usr';
 // columns sa table
 protected $fillable = [
 'username', 'password', 'gender'
 ];

  

}
