<?php

use Illuminate\Database\Seeder;


class YoutubeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Youtube::class, 10)->create();
    }
}
