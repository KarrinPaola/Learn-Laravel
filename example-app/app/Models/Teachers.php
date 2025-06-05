<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teachers extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "name",
        "email",
        "date_of_birth",
        "phone_number",
        "password", // Có thể gán hàng loạt
    ];

    protected $hidden = [
        "password", // Bị ẩn khi trả về JSON
    ];

    public function scopeAge($query){
        return $query->where("date_of_birth", "<", "1990-01-01");
    }


}
