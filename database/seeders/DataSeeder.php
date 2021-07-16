<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Data;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Data::truncate();

        Data::create([
                'id' => 1,
                'nama' => 'memory',
                'metadata' => '<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Throw Memory</p>
    <content>
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment_memory"></textarea>
        </div>
        <i class="fas fa-heart likes"></i>
        <a href="#" class="btn btn-success px-3" role="button" style="float:right;" data-toggle="modal" data-target="#myModal" onclick="clear_memory()">Throw !</a>
    </content>
</div>',
        ]);

        Data::create([
                'id' => 2,
                'nama' => 'exercise',
                'metadata' => '<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>exercise</p>
    <content>
        <center>
            <img id="id_senam" width="500px" class="img-thumbnail">
        </center>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>',
        ]);

        Data::create([
                'id' => 3,
                'nama' => 'cat',
                'metadata' => '<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>cat</p>
    <content>
        <center>
            <img id="id_cat" width="500px" class="img-thumbnail">
        </center>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>',
        ]);

        Data::create([
                'id' => 4,
                'nama' => 'gag',
                'metadata' => '<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>gag</p>
    <content>
        <center>
            <img id="id_gag" width="500px" class="img-thumbnail">
        </center>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>',
        ]);

        Data::create([
                'id' => 5,
                'nama' => 'advice',
                'metadata' => '<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Advice</p>
    <content>
        <div id="id_advice" class="h4"></div>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>',
        ]);

        Data::create([
                'id' => 6,
                'nama' => 'jokes',
                'metadata' => '<div class="card w-100 rounded p-2 mt-3 kotak text-dark">
    <p>Jokes</p>
    <content>
        <div id="id_jokes_setup" class="h4"></div>
        <div id="id_jokes_punchline" class="h4"></div>
    </content>
    <footer class="mt-4"><i class="fas fa-heart likes"></i></footer>
</div>',
        ]);






    }
}
