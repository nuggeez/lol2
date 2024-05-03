<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model{
    
    protected $table = 'tableuserjob';

    protected $fillable = [
        'jobid', 'jobname'
    ];

    public $timestamps = false;
    protected $primaryKey = 'jobid';
}