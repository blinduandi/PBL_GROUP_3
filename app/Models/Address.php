<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use GuzzleHttp\Client;


class Address extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id', 'city', 'street', 'number',
    ];

    /**
     * Get the user that owns the address.
     */
    protected static function booted()
    {
        static::creating(function ($address) {

            $client = new Client([
                'verify' => false,
            ]);
            $response = $client->get('https://nominatim.openstreetmap.org/search', [
                'query' => [
                    'format' => 'json',
                    'city' => $address->city,
                    'street' => $address->street,
                    'housenumber' => $address->number,
                ],
            ]);

            if ($response->getStatusCode() == 200) {
                $responseData = json_decode($response->getBody()->getContents(), true);
                dump($responseData);
                if (!empty($responseData)) {
                    $address->latitude = $responseData[0]['lat'];
                    $address->longitude = $responseData[0]['lon'];
                }
            }
        });
        static::updating(function ($address) {
            $client = new Client([
                'verify' => false,
            ]);
            $response = $client->get('https://nominatim.openstreetmap.org/search', [
                'query' => [
                    'format' => 'json',
                    'city' => $address->city,
                    'street' => $address->street,
                    'housenumber' => $address->number,
                ],
            ]);

            if ($response->getStatusCode() == 200) {
                $responseData = json_decode($response->getBody()->getContents(), true);
                if (!empty($responseData)) {
                    $address->latitude = $responseData[0]['lat'];
                    $address->longitude = $responseData[0]['lon'];
                }
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
