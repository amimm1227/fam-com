@extends('layouts.main')
@section('title', 'Fam-Com｜カレンダー登録')
@section('content')

   <div class="calendar-area">
    <h1>スケジュール</h1>

    <form method="POST" action="/calendar/add">
        @csrf
            <table>
                <tr>
                    <th></th>
                    <th>休み</th>
                    <th>外出</th>
                    <th>予定</th>
                </tr>
    
                @foreach ($calendar->getDays() as $day)
                    <tr>
                        <td>{{ $day['date']->format('n/j') }} ({{ $day['weekday'] }})</td>
                        <td>
                            <input type="checkbox" name="schedule[{{ $day['date']->format('Y-m-d') }}][holiday]">
                        </td>
                        <td>
                            <input type="checkbox" name="schedule[{{ $day['date']->format('Y-m-d') }}][outing]">
                        </td>
                        <td>
                            <input type="text" name="schedule[{{ $day['date']->format('Y-m-d') }}][plan]">
                        </td>
                    </tr>
                @endforeach
            </table>
            <button type="submit">登録</button>
        </form>
    </div>


@endsection
