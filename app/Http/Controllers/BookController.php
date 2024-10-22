<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\EventType;
use App\Models\Service;
use App\Models\State;
use App\Models\City; // Import City model
use App\Services\FileService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookController extends Controller
{

    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }
    public function history()
    {
        $user = Auth::user();
        $bookings = $user->bookings; // Pastikan relasi ini ada dan benar

        return view('booking.history', compact('bookings'));
    }

    public function view($bookingid)
    {
        $user = Auth::user();
        $booking = Booking::with('user', 'service', 'state', 'city')
            ->where('user_id', $user->id)
            ->where('id', $bookingid)
            ->first(); // Ambil booking yang sesuai

        if (!$booking) {
            return redirect()->route('booking.history')->with('error', 'Booking not found.');
        }

        return view('booking.view', compact('booking'));
    }



    public function create($service_id)
    {
        $eventTypes = EventType::all();
        $states = State::all();
        $service = Service::findOrFail($service_id);  // Ensure valid service is retrieved or fail gracefully

        return view('booking.create', compact('eventTypes', 'states', 'service'));
    }


    public function store(Request $request, $service_id)
    {
        $request->validate([
            'booking_from' => 'required|date',
            'booking_to' => 'required|date|after_or_equal:booking_from',
            'event_type_id' => 'required|integer|exists:event_types,id',
            'number_of_guest' => 'required|integer',
            'state_id' => 'required|integer|exists:states,id',
            'city_name' => 'required|string',
            'message' => 'required|string',
            'payment_proof' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        // Handle file upload using FileService
        $paymentProofPath = null;

        if ($request->hasFile('payment_proof')) {
            $paymentProofPath = $this->fileService->uploadFile($request->file('payment_proof'));
        }

        // Insert booking data into the database
        Booking::create([
            'booking_number' => mt_rand(100000000, 999999999),
            'service_id' => $service_id,
            'user_id' => Auth::id(),
            'booking_from' => $request->booking_from,
            'booking_to' => $request->booking_to,
            'event_type_id' => $request->event_type_id,
            'number_of_guest' => $request->number_of_guest,
            'state_id' => $request->state_id,
            'city_name' => $request->city_name,
            'message' => $request->message,
            'payment_proof' => $paymentProofPath,
            'status' => 'Pending'
        ]);

        return redirect()->route('booking.history')->with('success', 'Your booking has been placed successfully.');
    }
}
