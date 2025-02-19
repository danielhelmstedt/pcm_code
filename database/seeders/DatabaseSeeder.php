<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\OrganizationModel;
use Database\Seeders\Seeder_2_0_0;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Initial -> 2.0.0
        if(!OrganizationModel::all()->count()) {
            $this->call([Seeder_2_0_0::class]);
        }

        $org = OrganizationModel::where('id', 1)->first();

        /*
        *
        // 1.0.0 -> 1.0.1
        if(version_compare($org->version, '1.0.0') === 0) {
            $org->version = '1.0.1';
            $org->save();
        }
        *
        */

    }
}
