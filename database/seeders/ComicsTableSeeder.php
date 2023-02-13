<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newComic = new Comic();
        $newComic->title = 'Titolo prova';
        $newComic->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quo quam culpa vitae, vero molestias nihil illo porro, voluptate minus quod iusto et saepe commodi expedita repellat tempora quia? Minima!';
        $newComic->thumb = 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq';
        $newComic->price = '19.22';
        $newComic->series = 'SerieProva';
        $newComic->sale_date = '2019-04-10';
        $newComic->type = 'graphic novel';
        $newComic->save();
    }
}