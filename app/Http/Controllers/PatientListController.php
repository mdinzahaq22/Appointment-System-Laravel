<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Booking;
use App\User;

class PatientListController extends Controller
{
    public function index(Request $request)
    { // Set timezone
        //date_default_timezone_set('America/New_York');
        
        if ($request->date) {
            $date = $request->date;
            $bookings = Booking::latest()->where('date', $date)->get();
            return view('admin.patientlist.index', compact('bookings', 'date'));
        };
        if($request->patientName){
            $patientName = $request->patientName;
            $bookings = Booking::latest('bookings.created_at')->join('users','bookings.user_id','=','users.id')->where('name', $patientName)->get();
            return view('admin.patientlist.index', compact('bookings', 'patientName'));
        }
        $bookings = Booking::latest()->where('date', date('m-d-yy'))->get();
        return view('admin.patientlist.index', compact('bookings'));
    }
    public function Doctorindex(Request $request)
    { // Set timezone
        //date_default_timezone_set('America/New_York');
        $userId = auth()->user()->id;
        if ($request->date) {
            $date = $request->date;
            $bookings = Booking::latest()->where('date', $date)->where('doctor_id',$userId)->get();
            return view('admin.patientlist.index', compact('bookings', 'date'));
        };
        if($request->patientName){
            $patientName = $request->patientName;
            $bookings = Booking::latest('bookings.created_at')->join('users','bookings.user_id','=','users.id')->where('name', $patientName)->where('bookings.doctor_id',$userId)->get();
            return view('admin.patientlist.index', compact('bookings', 'patientName'));
        }
        $bookings = Booking::latest()->where('date', date('m-d-yy'))->get();
        return view('admin.patientlist.index', compact('bookings'));
    }
    public function toggleStatus($id)
    {
        $booking = Booking::find($id);
        $booking->status = !$booking->status;
        $booking->save();
        return redirect()->back();
    }

    public function allTimeAppointment()
    {
        $bookings = Booking::latest()->paginate(20);
        return view('admin.patientlist.all', compact('bookings'));
    }
}
