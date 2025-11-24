<x-app-layout>

    <x-slot:title>Create a Business</x-slot:title>

    <div class="w-full h-full p-6 bg-[#F9F9F9] dark:bg-[#121212]">
        <main class="max-w-7xl mx-auto">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="bg-red-500 text-white p-2 mb-4">{{ $error }}</div>
                @endforeach
            @endif

            @session('success')
                <div class="bg-green-500 text-white p-2 mb-4">{{ session('success') }}</div>
            @endsession
            <form action="{{ route('businesses.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Basic Information Section -->
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Basic Information</h2>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Business Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                        <div class="md:col-span-2">
                            <label for="tagline" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tagline</label>
                            <input type="text" name="tagline" id="tagline" value="{{ old('tagline') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="md:col-span-2">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description') }}</textarea>
                        </div>
                        <div>
                            <label for="logo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Logo</label>
                            <input type="file" name="logo" id="logo" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div>
                            <label for="cover_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cover Image</label>
                            <input type="file" name="cover_image" id="cover_image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                    </div>
                </div>

                <!-- Contact Information Section -->
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Contact Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="whatsapp" class="block text-sm font-medium text-gray-700 dark:text-gray-300">WhatsApp</label>
                            <input type="text" name="whatsapp" id="whatsapp" value="{{ old('whatsapp') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="website" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Website</label>
                            <input type="url" name="website" id="website" value="{{ old('website') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Address</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label for="address_line1" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address Line 1</label>
                            <input type="text" name="address_line1" id="address_line1" value="{{ old('address_line1') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="md:col-span-2">
                            <label for="address_line2" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address Line 2</label>
                            <input type="text" name="address_line2" id="address_line2" value="{{ old('address_line2') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 dark:text-gray-300">City</label>
                            <input type="text" name="city" id="city" value="{{ old('city') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="district" class="block text-sm font-medium text-gray-700 dark:text-gray-300">District</label>
                            <input type="text" name="district" id="district" value="{{ old('district') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Country</label>
                            <input type="text" name="country" id="country" value="{{ old('country') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="postal_code" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Postal Code</label>
                            <input type="text" name="postal_code" id="postal_code" value="{{ old('postal_code') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="latitude" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Latitude</label>
                            <input type="text" name="latitude" id="latitude" value="{{ old('latitude') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="longitude" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Longitude</label>
                            <input type="text" name="longitude" id="longitude" value="{{ old('longitude') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <!-- Business Details Section -->
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Business Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="employees_count" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Number of Employees</label>
                            <input type="number" name="employees_count" id="employees_count" value="{{ old('employees_count') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="founded_year" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Year Founded</label>
                            <input type="number" name="founded_year" id="founded_year" value="{{ old('founded_year') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="registration_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Registration Number</label>
                            <input type="text" name="registration_number" id="registration_number" value="{{ old('registration_number') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div class="md:col-span-3">
                            <label for="opening_hours" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Opening Hours</label>
                            <textarea name="opening_hours" id="opening_hours" rows="4" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder='e.g., {"Monday": "9:00 AM - 5:00 PM", "Tuesday": "9:00 AM - 5:00 PM"}'></textarea>
                        </div>
                    </div>
                </div>

                <!-- Online Presence & Services Section -->
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Online Presence & Services</h2>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="social_links" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Social Links</label>
                            <textarea name="social_links" id="social_links" rows="4" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder='e.g., {"facebook": "https://facebook.com/yourpage", "twitter": "https://twitter.com/yourhandle"}'></textarea>
                        </div>
                        <div>
                            <label for="services" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Services</label>
                            <textarea name="services" id="services" rows="4" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder='e.g., ["Web Design", "Digital Marketing", "SEO"]'></textarea>
                        </div>
                        <div>
                            <label for="features" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Features</label>
                            <textarea name="features" id="features" rows="4" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder='e.g., ["Free Wi-Fi", "Parking Available", "Accepts Credit Cards"]'></textarea>
                        </div>
                    </div>
                </div>

                <!-- SEO Section -->
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">SEO</h2>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="meta_title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="meta_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" rows="3" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('meta_description') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Status Section -->
                <div class="p-8 bg-white dark:bg-gray-800 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Status</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full px-4 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="active" @if(old('status') == 'active') selected @endif>Active</option>
                                <option value="inactive" @if(old('status') == 'inactive') selected @endif>Inactive</option>
                                <option value="pending" @if(old('status') == 'pending') selected @endif>Pending Review</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <input id="is_verified" name="is_verified" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" @if(old('is_verified')) checked @endif>
                            <label for="is_verified" class="ml-2 block text-sm text-gray-900 dark:text-gray-300">
                                Is Verified
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save Business
                    </button>
                </div>
            </form>
        </main>
    </div>

</x-app-layout>
