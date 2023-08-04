<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AstroSign extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        ["id" => 1, "name" => "Aries", "symbol" => "♈️", "daterange" => "March 21 - April 19"],
        ["id" => 2, "name" => "Taurus", "symbol" => "♉️", "daterange" => "April 20 - May 20"],
        ["id" => 3, "name" => "Gemini", "symbol" => "♊️", "daterange" => "May 21 - June 20"],
        ["id" => 4, "name" => "Cancer", "symbol" => "♋️", "daterange" => "June 21 - July 22"],
        ["id" => 5, "name" => "Leo", "symbol" => "♌️", "daterange" => "July 23 - August 22"],
        ["id" => 6, "name" => "Virgo", "symbol" => "♍️", "daterange" => "August 23 - September 22"],
        ["id" => 7, "name" => "Libra", "symbol" => "♎️", "daterange" => "September 23 - October 22"],
        ["id" => 8, "name" => "Scorpio", "symbol" => "♏️", "daterange" => "October 23 - November 21"],
        ["id" => 9, "name" => "Sagittarius", "symbol" => "♐️", "daterange" => "November 22 - December 21"],
        ["id" => 10, "name" => "Capricorn", "symbol" => "♑️", "daterange" => "December 22 - January 19"],
        ["id" => 11, "name" => "Aquarius", "symbol" => "♒️", "daterange" => "January 20 - February 18"],
        ["id" => 12, "name" => "Pisces", "symbol" => "♓️", "daterange" => "February 19 - March 20"]
    ];
}
