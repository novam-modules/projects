<?php

namespace Modules\Projects\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Business\Traits\BusinessObject;
use Modules\Documedia\Traits\DocuMediaObject;

class Job extends Model
{
    use BusinessObject, DocuMediaObject;

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

    public function Services()
    {
        return $this->hasMany(JobService::class);
    }


}
