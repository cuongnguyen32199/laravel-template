<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Measure
 *
 * @property string $measure_timestamp
 * @property string|null $station_name
 * @property int $wind_mtsperhour
 * @property int $windgust_mtsperhour
 * @property int $windangle
 * @property string|null $rain_mm
 * @property int|null $temperature_dht11
 * @property int|null $humidity_dht11
 * @property string $barometric_pressure
 * @property string $barometric_temperature
 * @property string|null $lux
 * @property int|null $is_plugged
 * @property int|null $battery_level
 * @method static \Illuminate\Database\Eloquent\Builder|Measure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Measure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Measure query()
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereBarometricPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereBarometricTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereBatteryLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereHumidityDht11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereIsPlugged($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereLux($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereMeasureTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereRainMm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereStationName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereTemperatureDht11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereWindMtsperhour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereWindangle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Measure whereWindgustMtsperhour($value)
 */
	class Measure extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

