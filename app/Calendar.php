<?php

namespace App;

use Carbon\Carbon;

class Calendar
{
    protected $startOfWeek;

    public function __construct($startOfWeek = null)
    {
        $this->startOfWeek = $startOfWeek ?: Carbon::now()->startOfWeek();
    }

    public function getDays()
    {
        $days = [];
    
        $weekdays = ['日', '月', '火', '水', '木', '金', '土'];
    
        for ($i = 0; $i < 7; $i++) {
            $days[] = [
                'date' => $this->startOfWeek->clone(),
                'weekday' => $weekdays[$this->startOfWeek->dayOfWeek],
            ];
            $this->startOfWeek->addDay();
        }

    return $days;
    }

}
