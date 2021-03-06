<?php

namespace App\Http\Controllers\Guru;

use App\Models\kehadiran;
use App\Models\siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValueGuruController extends Controller
{
    public function valueDashboard(Request $request)
    {
        if ($request->ajax()) {
            $date = now()->format('Y-m-d');
            $anggota = siswa::all()->count();
            // $hadir = kehadiran::where('tanggal', '=', $date)->where('ket', '=', 'hadir')->count();
            // $tidakhadir = kehadiran::where('tanggal', '=', $date)
            //     ->where(function ($query) {
            //         $query->where('ket', '=', 'alfa')
            //             ->orWhere('ket', '=', 'sakit')
            //             ->orWhere('ket', '=', 'izin');
            //     })->count();
            // $terlambat = kehadiran::where('tanggal', '=', $date)->whereTime('CHECK_IN', '>', 'JAM_MASUK')
            //     ->Where('CHECK_IN', '!=', 'empty')->count();

            // $izin_pulang = kehadiran::where('tanggal', '=', $date)->whereTime('CHECK_OUT', '<', 'JAM_MASUK')
            //     ->Where('CHECK_OUT', '!=', 'empty')->count();

            // $total_checkout = kehadiran::where('tanggal', '=', $date)->whereTime('CHECK_OUT', '!=', '')
            //     ->Where('CHECK_OUT', '!=', 'empty')->count();
            // $total_checkin = $hadir - $total_checkout;
            return response()->json(compact('anggota'));
            // , 'ruangan', 'hadir', 'tidakhadir', 'terlambat', 'izin_pulang', 'total_checkin', 'total_checkout'
        }
        return redirect()->back();
    }
}
