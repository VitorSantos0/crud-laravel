<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\ModelEvent;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelEvent $event)
    {
        $event->create([
            'title'=> 'Evento',
            'local'=> 'Cidade',
            'value'=> '1.99',
            'info'=> 'Uma breve descrição',
            'id_user'=> '1',
        ]);
        
        // ...
    }
}
