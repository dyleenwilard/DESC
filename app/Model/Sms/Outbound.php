<?php

namespace App\Model\Sms;

use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    protected $table = 'outbound';
    public $timestamps = false;
    protected $fillable = [
        'cluster_id', 'reference_id', 'sms_type', 'number', 'message', 'time_prepared', 'time_delivered', 'request_id'
    ];
}
