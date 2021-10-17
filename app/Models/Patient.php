<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
    ];

    public function bloodPressures()
    {
        return $this->hasMany(BloodPressure::class);
    }

    public function getLatestBpAttribute()
    {
        $latestBloodPressure = $this->bloodPressures()->orderBy('id', 'desc')->first();
        if($latestBloodPressure)
            return $latestBloodPressure->systolic . '/' . $latestBloodPressure->diastolic;
        return 'NA';
    }

}
