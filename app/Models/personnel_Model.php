<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnel_Model extends Model
{
    use HasFactory;
    public $table = 'personnel_Details';

    protected $fillable = [
        "SvnNo",
        "UnNo",
        "Surname",
        "Othernames",
        "DailyAllawa",
        "EntertainmentAllawa",
        "EarnedDollarDebit",
        "TotalAmount"


    ];


    protected $casts = [
        "SvnNo"=> "string",
        "UnNo" => "string",
        "Surname" => "string",
        "Othernames" => "string",
        "DailyAllawa" => "string",
        "EntertainmentAllawa" => "string",
        "EarnedDollarDebit" => "string",
        "TotalAmount" => "string"

    ];

    public static $rules = [
        "SvnNo"=> "required|string|max=6",
        "UnNo" => "required|string|max=30",
        "Surname" => "required|string|max=30",
        "Othernames" => "required|string|max=30",
        "DailyAllawa" => "required|string|max=30",
        "EntertainmentAllawa" => "required|string|max=30",
        "EarnedDollarDebit" => "required|string|max=30",
        "TotalAmount" => "required|string|max=30"

    ];
}
