<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    public function show($id)
    {
        $user = Auth::user();
        $reservations = DB::table('reservations')->where('user_id', $user->id)->get();
        return view('reservation.index', compact(array('reservations', 'user')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("reservation.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $reservation = new Reservation;
        $reservation->user_id = $request->user()->id;
        $reservation->apartment_class = $data['apartment-class'];
        $reservation->rooms = $data['rooms'];
        $reservation->from = $data['check-in'];
        $reservation->to = $data['check-out'];
        $reservation->adults = $data['adults'];
        $reservation->children = $data['children'];
        $reservation->save();
        return redirect('reservation/index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $data = $request->input();
        $reservation->update([
            'apartment_class' => $data['apartment-class'],
            'rooms' => $data['rooms'],
            'from' => $data['check-in'],
            'to' => $data['check-out'],
            'adults' => $data['adults'],
            'children' => $data['children'],
        ]);
        return redirect('reservation/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect('reservation/index');
    }
}
