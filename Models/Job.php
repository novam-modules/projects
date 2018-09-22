<?php

namespace Admin\Projects\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        ''
    ];

    public function Manager()
    {
        return $this->hasOne(User::class);
    }

    public function Estimator()
    {
        return $this->hasOne(User::class);
    }

    public function Customer()
    {
        return $this->hasOne(Guest::class);
    }

    public function Services()
    {
        return $this->hasMany(JobService::class);
    }

    public function Files()
    {
        return $this->belongsTo(File::class);
    }
}
