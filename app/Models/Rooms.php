<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'phongban';
    protected $primaryKey = 'Ma_Phong';
    protected $fillable = ['Ma_Phong', 'Ten_Phong'];

    public function employee()
    {
        return $this->hasMany(Employee::class, 'Ma_Phong', 'Ma_Phong');
    }
}
