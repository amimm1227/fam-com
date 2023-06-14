<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;
use App\Models\User;
use App\Models\Schedule;

class CalendarController extends Controller
{
    public function index()
    {
        $calendar = new Calendar();

        // 現在の年月を取得
        $year = date('Y');
        $month = date('m');
        $monthName = date('F'); // 当月の月の名称を取得

        // 最終日を取得
        $lastDay = date('t', strtotime($year . '-' . $month));

        // 曜日の配列を作成
        $dayOfWeek = [];
        for ($day = 1; $day <= $lastDay; $day++) {
            $dayOfWeek[$day] = date('D', strtotime($year . '-' . $month . '-' . $day));
        }

        $users = User::all();

        return view('toppage', compact('calendar', 'lastDay', 'dayOfWeek', 'users'));
    }

    public function create()
    {
        return view('calendar.add');
    }

    public function store(Request $request)
    {
        // バリデーションなどの適切な処理を追加する

        $scheduleData = $request->input('schedule');

        // スケジュールの保存処理（データベースへの保存など）
        // 例: Scheduleモデルにスケジュールを保存する場合
        foreach ($scheduleData as $date => $schedule) {
            $newSchedule = new Schedule();
            $newSchedule->date = $date;
            $newSchedule->holiday = isset($schedule['holiday']) ? true : false;
            $newSchedule->outing = isset($schedule['outing']) ? true : false;
            $newSchedule->plan = $schedule['plan'];
            $newSchedule->save();
        }

