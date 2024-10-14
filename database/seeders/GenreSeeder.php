<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Narrativa',
            'description' => 'La narrativa incluye géneros como la novela y el cuento, caracterizados por una secuencia de eventos narrados por uno o varios personajes.'
        ]);

        Genre::create([
            'name' => 'Poesía',
            'description' => 'Género literario que se expresa en verso y busca transmitir sentimientos, emociones o pensamientos a través de la palabra rítmica.'
        ]);

        Genre::create([
            'name' => 'Teatro',
            'description' => 'Género literario en el que se representan situaciones dramáticas a través del diálogo y la acción de los personajes, destinado a ser representado en un escenario.'
        ]);

        Genre::create([
            'name' => 'Ensayo',
            'description' => 'Un género literario en el que el autor reflexiona y argumenta sobre un tema particular desde un punto de vista personal.'
        ]);

        Genre::create([
            'name' => 'Épico',
            'description' => 'Este género narra hechos históricos o legendarios de gran magnitud y heroísmo, a menudo en forma de poesía o prosa.'
        ]);
    }
}
