<?php
use App\Channel;
use Illuminate\Database\Seeder;




class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name'=>'Laravel 5.8',
            'slug'=>str_slug('Laravel 5.8')
        ]);

        Channel::create([
            'name'=>'vue js 3',
            'slug'=>str_slug('vue js 3')
        ]);

        Channel::create([
            'name'=>'Angular 7',
            'slug'=>str_slug('Angular 7')
        ]);

        Channel::create([
            'name'=>'Node js',
            'slug'=>str_slug('Node js')
        ]);

       
    }
}
