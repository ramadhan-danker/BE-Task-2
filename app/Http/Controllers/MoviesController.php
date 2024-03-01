<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function relese_date()
    {
        $sql = "SELECT
        CASE 
            WHEN month = 'January' THEN 1
            WHEN month = 'February' THEN 2
            WHEN month = 'March' THEN 3
            WHEN month = 'April' THEN 4
            WHEN month = 'May' THEN 5
            WHEN month = 'June' THEN 6
            WHEN month = 'July' THEN 7
            WHEN month = 'August' THEN 8
            WHEN month = 'September' THEN 9
            WHEN month = 'October' THEN 10
            WHEN month = 'November' THEN 11
            WHEN month = 'December' THEN 12
        END AS month_integer
    FROM
        movies;
    ";
        echo $sql;
    }
}
