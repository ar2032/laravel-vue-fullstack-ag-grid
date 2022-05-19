<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
	protected $collection = 'post';
    protected $fillable = [
    'STATUS',

    'DDC_CODE',

    'TRADE_NAME',

    'SCIENTIFIC_CODE',

    'SCIENTIFIC_NAME',

    'INGREDIENT_STRENGTH',

    'DOSAGE_FORM_PACKAGE',

    'ROUTE_OF_ADMIN',
    'PACKAGE_PRICE',

    'GRANULAR_UNIT',

    'MANUFACTURER',

    'REGISTERED_OWNER',

    'UPDATED_DATE',

    'SOURCE'
    ];
}
