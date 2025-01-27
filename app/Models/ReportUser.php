<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportUser extends Model
{
    use HasFactory;
    protected $table = 'report_users';
    protected $fillable = ['report_id', 'value_adjustment'];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
