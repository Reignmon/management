<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{

    protected $table = 'employe_tbl';
    protected $primaryKey = 'id';

    protected $fillable = [
        'firstname',
        'lastname',
        'dateofbirth',
        'phone',
        ];
    use HasFactory;
}
