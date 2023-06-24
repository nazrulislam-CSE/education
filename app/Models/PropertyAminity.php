<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAminity extends Model
{
    use HasFactory;
    protected $fillable=[
        'property_id','aminity_id','status'
    ];

    public function aminity(){
        return $this->belongsTo(Aminity::class);
    }

    public function property(){
        return $this->belongsTo(Property::class);
    }
}
