<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnel extends Model
{
    use HasFactory;

    public $table = 'personnel_details';

    protected $fillable = [
        
        'SvnNo',
        'UnNo',
        'Surname',
        'Othernames',
        'DailyAllawa',
        'EntertainmentAllawa',
        'EarnedDollarDebit',
        'TotalAmount'


    ];
}