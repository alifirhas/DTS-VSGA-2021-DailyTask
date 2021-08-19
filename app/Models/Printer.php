<?php

namespace App\Models;

use App\Models\Color;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Printer extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merek',
        'color_id',
        'jumlah',
    ];

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
