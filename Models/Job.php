<?php

namespace Modules\Projects\Models;

use App\Models\Auth\User;
use Modules\Business\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Modules\Business\Traits\BusinessObject;

class Job extends Model
{
    use BusinessObject;

    protected $fillable = [
        ''
    ];

    public function Manager()
    {
        return $this->belongsTo(User::class);
    }

    public function Estimator()
    {
        return $this->belongsTo(User::class);
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
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
