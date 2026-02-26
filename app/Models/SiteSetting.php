<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'company_name',
        'brand_name',
        'logo_url',
        'tax_code',
        'hotline',
        'email',
        'address',
        'working_hours',
    ];
}
