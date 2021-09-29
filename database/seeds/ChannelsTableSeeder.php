<?php
use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'A/L Accounting',
            'slug' => str_slug('A/L Accounting')
        ]);
        
        Channel::create([
            'name' => 'A/L Biology',
            'slug' => str_slug('A/L Biology')
        ]);

        Channel::create([
            'name' => 'A/L Business Studies',
            'slug' => str_slug('A/L Business Studies')
        ]);
        
        Channel::create([
            'name' => 'A/L Chemistry',
            'slug' => str_slug('A/L Chemistry')
        ]);

        Channel::create([
            'name' => 'A/L Combined Mathematics',
            'slug' => str_slug('A/L Combined Mathematics')
        ]);

        Channel::create([
            'name' => 'A/L Economics',
            'slug' => str_slug('A/L Economics')
        ]);

        Channel::create([
            'name' => 'A/L Physics',
            'slug' => str_slug('A/L Physics')
        ]);

    }
}
