<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $igraci=[
            ['ime' => 'Roger', 'prezime' => 'Federer', 'datum_rođenja' => '1981.08.08', 'pozicija' => 1, 'spol' => 'M', 'drzava'=>'Svicarska'],
            ['ime' => 'Rafael', 'prezime' => 'Nadal', 'datum_rođenja' => '1986.06.03', 'pozicija' => 2, 'spol' => 'M', 'drzava'=>'Spanjolska']
        ];

        DB::table('igraci')->insert($igraci);

        $kategorije_turnira=[
            ['kategorija' => 'Masters'],
            ['kategorija' => 'Grand slam']
        ];
        
        DB::table('kategorije_turnira')->insert($kategorije_turnira);

        $rezultati=[
            ['pobjednik' => 'Roger Federer', 'broj_odigranih_setova' => 4],
            ['pobjednik' => 'Rafael Nadal', 'broj_odigranih_setova' => 5]
        ];

        DB::table('rezultati')->insert($rezultati);

        $turniri=[
            ['ime_turnira' => 'Wimbledon', 'vrijeme_odrzavanja' => '2021.06.28', 'vrsta_podloge' => 'trava', 'lokacija' => 'London', 'id_kategorije_turnira' => 1, 'id_rezultati' => 1],
            ['ime_turnira' => 'Roland Garros', 'vrijeme_odrzavanja' => '2021.05.28', 'vrsta_podloge' => 'zemlja', 'lokacija' => 'Paris', 'id_kategorije_turnira' => 2, 'id_rezultati' => 2]
        ];

        DB::table('turniri')->insert($turniri);

        $mecevi=[
            ['id_igrac' => 1, 'id_turniri' => 1, 'runda' => 'polufinale', 'rezultat' => '6:3 6:4'],
            ['id_igrac' => 2, 'id_turniri' => 2, 'runda' => 'finale', 'rezultat' => '6:1 6:2']
        ];

        DB::table('mecevi')->insert($mecevi);
        
        \App\Models\Igrac::factory(48)->create();

        \App\Models\Kategorija_turnira::factory(48)->create();

        \App\Models\Rezultat::factory(48)->create();

        \App\Models\Turnir::factory(48)->create();

        \App\Models\Mec::factory(48)->create();

        \App\Models\Igra::factory(50)->create();

        \Database\Factories\Igrac::factory()->create([
            'email' => 'admin@admin.com'
        ]);



    }
}
