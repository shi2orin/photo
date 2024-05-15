<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // レコード1
        DB::table('artworks')->insert([
            'name' => '名前1',
            'title' => '写真1',
            'image' => 'image01.jpg',
            'alt' => '写真1',
            'sns' => '@1',
        ]);

        // レコード2
        DB::table('artworks')->insert([
            'name' => '名前2',
            'title' => '写真2',
            'image' => 'image02.jpg',
            'alt' => '写真2',
            'sns' => '@2',
        ]);

        // レコード3
        DB::table('artworks')->insert([
            'name' => '名前3',
            'title' => '写真3',
            'image' => 'image03.jpg',
            'alt' => '写真3',
            'sns' => '@3',
        ]);

        // レコード4
        DB::table('artworks')->insert([
            'name' => '名前4',
            'title' => '写真4',
            'image' => 'image04.jpg',
            'alt' => '写真4',
            'sns' => '@4',
        ]);

        // レコード5
        DB::table('artworks')->insert([
            'name' => '名前5',
            'title' => '写真5',
            'image' => 'image05.jpg',
            'alt' => '写真5',
            'sns' => '@5',
        ]);

        // レコード6
        DB::table('artworks')->insert([
            'name' => '名前6',
            'title' => '写真6',
            'image' => 'image06.jpg',
            'alt' => '写真6',
            'sns' => '@6',
        ]);
    }
}
