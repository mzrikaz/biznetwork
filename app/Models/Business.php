<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Business extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'tagline',
        'logo',
        'cover_image',
        'email',
        'phone',
        'whatsapp',
        'website',
        'address_line1',
        'address_line2',
        'city',
        'district',
        'country',
        'postal_code',
        'latitude',
        'longitude',
        'user_id',
        'employees_count',
        'founded_year',
        'registration_number',
        'opening_hours',
        'social_links',
        'services',
        'features',
        'is_verified',
        'status',
        'views_count',
        'reviews_count',
        'rating',
        'meta_title',
        'meta_description',
    ];

    /**
     * Get the user that owns the Business
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
