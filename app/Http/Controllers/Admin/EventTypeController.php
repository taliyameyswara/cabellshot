<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventType;
use Exception;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    public function index()
    {
        $event_types = EventType::all(); // Fetch all event types
        return view('admin.event-types.index', compact('event_types'));
    }

    public function create()
    {
        return view('admin.event-types.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'type' => 'required|string|max:255', // Validate event type
            ]);

            EventType::create([
                'type' => $request->type, // Store event type
            ]);

            return redirect()->route('admin.event-types.index')->with('success', 'Berhasil membuat Event Type!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Gagal membuat Event Type: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $eventType = EventType::findOrFail($id); // Find event type or fail
            $eventType->delete(); // Delete the event type

            return redirect()->route('admin.event-types.index')->with('success', 'Berhasil menghapus Event Type!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus Event Type: ' . $e->getMessage());
        }
    }
}
