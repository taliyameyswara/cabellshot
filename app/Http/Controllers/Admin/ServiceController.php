<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\FileService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function index()
    {
        $services = Service::all(); // Fetch all services
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'sername' => 'required|string|max:255',
                'serdes' => 'required|string',
                'serprice' => 'required|numeric',
                'serviceImage' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Handle the image upload
            $fileName = null;
            if ($request->hasFile('serviceImage')) {
                $fileName = $this->fileService->uploadFile($request->file('serviceImage'));
            }

            // Store service details
            $service = new Service();
            $service->name = $request->input('sername');
            $service->description = $request->input('serdes');
            $service->price = $request->input('serprice');
            $service->image = $fileName;
            $service->save();

            return redirect()->route('admin.services.index')->with('success', 'Service berhasil dibuat!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to create service: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        try {
            // Validate the request
            $request->validate([
                'sername' => 'required|string|max:255',
                'serdes' => 'required|string',
                'serprice' => 'required|numeric',
                'serviceImage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $service = Service::find($id);

            // Handle the image replacement
            if ($request->hasFile('serviceImage')) {
                $newFileName = $this->fileService->replaceFile($request->file('serviceImage'), $service->image);
                $service->image = $newFileName;
            }

            // Update service details
            $service->name = $request->input('sername');
            $service->description = $request->input('serdes');
            $service->price = $request->input('serprice');
            $service->save();

            return redirect()->route('admin.services.index')->with('success', 'Service updated successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update service: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            $service = Service::find($id);

            if ($service->image) {
                $this->fileService->removeFile($service->image, 'public');
            }

            $service->delete();

            return redirect()->route('admin.services.index')->with('success', 'Service successfully deleted!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete service: ' . $e->getMessage());
        }
    }
}
