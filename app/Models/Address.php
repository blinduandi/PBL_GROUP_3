<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use GuzzleHttp\Client;
use Laravel\Nova\Notifications\NovaNotification;
use Laravel\Nova\URL;
use Illuminate\Http\Request;


class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'city', 'street', 'number', 'latitude', 'longitude',
    ];

    /**
     * Boot the model.
     */
    public function msg(Request $request){
        $request->user()->notify(
            NovaNotification::make()
                ->message('Your report is ready to download.')
                ->action('Download', URL::remote('https://example.com/report.pdf'))
                ->icon('download')
                ->type('info')
        );

    }

    protected static function booted()
    {

        static::creating(function ($address) {
            $address->fetchCoordinates();
        });

        static::updating(function ($address) {
            $address->fetchCoordinates();
        });
    }

    // Method to fetch coordinates and update model
    protected function fetchCoordinates()
    {
        $client = new Client([
            'verify' => false,
        ]);
        $response = $client->get('https://nominatim.openstreetmap.org/search', [
            'query' => [
                'format' => 'json',
                'city' => $this->city,
                'street' => $this->street,
                'housenumber' => $this->number,
            ],
        ]);

        if ($response->getStatusCode() == 200) {
            $responseData = json_decode($response->getBody()->getContents(), true);
            if (!empty($responseData)) {
                $this->latitude = $responseData[0]['lat'];
                $this->longitude = $responseData[0]['lon'];
            } else {
                // Address not found, send notification;
                $this->sendAddressNotFoundNotification();
            }
        }
    }

    // Method to send notification when address is not found
    protected function sendAddressNotFoundNotification()
    {
NovaNotification::make()->message("AAAAAAAAAAAAa");
    }

    // Define relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
