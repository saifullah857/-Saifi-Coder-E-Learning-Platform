<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Correct lowercase table name
    protected $table = 'booking';

    protected $fillable = [
        'course_id',
        'name',
        'email',
        'phone',
        'payment_id',
        'course_price',
        'enrollment_date',
        'last_date',
        'image',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

