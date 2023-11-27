<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasX extends Model
{
    use HasFactory;

    protected $table = "datakelas";
    protected $primaryKey = "id";
    protected $fillable = [
        'classX','roomteacherX','majorX',];

}
