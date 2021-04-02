<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\guru;
use App\Models\siswa;
use Spatie\GoogleCalendar\Event;

class ViewAdminController extends Controller
{
    public function dashboard()
    {
        // $event = new Event;
        // dd($event);
        // $google_client = new Google\Client(storage_path() . '/app/presensicredentials.json');
        // $google_client->setScopes(::CALENDAR_READONLY);
        // $google_client->setAuthConfig('credentials.json');
        // $google_client->setAccessType('offline');
        // $google_client->setPrompt('select_account consent');

        // $liburNasional = json_decode(
        //     file_get_contents(
        //         "https://www.googleapis.com/calendar/v3/calendars/" . config('services.google.calendarHolidayId') . "/events?key=" . config('services.google.calendarKey') . ""
        //     ),
        //     true
        // );
        // dd($liburNasional);
        return view("pages.admin.dashboard", ['anggota' => siswa::all()->count(), 'guru' => guru::all()->count()]);
    }
    public function profile()
    {
        return view("pages.admin.profile");
    }

    // guru
    public function guru()
    {
        return view("pages.admin.guru", ['guru' => guru::all(),]);
    }
}
