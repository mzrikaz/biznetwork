<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businesses = auth()->user()->businesses;
        return view('dashboard.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'tagline' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'website' => 'nullable|url|max:255',
            'address_line1' => 'nullable|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'employees_count' => 'nullable|integer',
            'founded_year' => 'nullable|digits:4|integer',
            'registration_number' => 'nullable|string|max:100',
            'opening_hours' => 'nullable|json',
            'social_links' => 'nullable|json',
            'services' => 'nullable|json',
            'features' => 'nullable|json',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'status' => 'nullable|string|max:50',
        ]);

        $slug = Str::slug($request->name);
        $slugAvailable = 0;

        while($slugAvailable == 0) {
            $existingBusiness = Business::where('slug', $slug)->exists();
            if ($existingBusiness) {
                $slug .= '-' . Str::random(5);
            } else {
                $slugAvailable = 1;
            }
        }

        $logoPath = null;
        $coverPath = null;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('images/logos', 'public');
        }

        if ($request->hasFile('cover_image')) {
            $coverPath = $request->file('cover_image')->store('images/cover_images', 'public');
        }

        Business::create([
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'tagline' => $request->tagline,
            'logo' => $logoPath,
            'cover_image' => $coverPath,
            'email' => $request->email,
            'phone' => $request->phone,
            'whatsapp' => $request->whatsapp,
            'website' => $request->website,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'city' => $request->city,
            'district' => $request->district,
            'country' => $request->country,
            'postal_code' => $request->postal_code,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'user_id' => auth()->id(),
            'employees_count' => $request->employees_count,
            'founded_year' => $request->founded_year,
            'registration_number' => $request->registration_number,
            'opening_hours' => $request->opening_hours,
            'social_links' => $request->social_links,
            'services' => $request->services,
            'features' => $request->features,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status' => $request->status ?? 'active',
        ]);

        return redirect()->route('businesses.show', ['business' => $slug])->with('success', 'Business created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        return view('businesses.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
