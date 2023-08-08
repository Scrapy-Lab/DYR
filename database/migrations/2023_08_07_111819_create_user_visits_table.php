<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

                //sample response
        // {
        //     "status": "success",
        //     "country": "Finland",
        //     "countryCode": "FI",
        //     "region": "18",
        //     "regionName": "Uusimaa",
        //     "city": "Espoo",
        //     "zip": "02150",
        //     "lat": 60.1698,
        //     "lon": 24.8292,
        //     "timezone": "Europe/Helsinki",
        //     "isp": "Fortum",
        //     "org": "Fortum Oyj",
        //     "as": "AS1234 Fortum",
        //     "query": "137.96.143.251"
        //     }
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_visits', function (Blueprint $table) {
            $table->id();
            $table->string('contact_id')->nullable();
            $table->string('country')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('region')->nullable();
            $table->string('regionName')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('timezone')->nullable();
            $table->string('isp')->nullable();
            $table->string('org')->nullable();
            $table->string('as')->nullable();
            $table->string('query')->nullable();
            $table->string('status')->nullable();
            $table->boolean('mode')->default(0)->comment('0 = on Visit | 1 = contact us ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_visits');
    }
};
