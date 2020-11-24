<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Activity;
use App\Models\Tag;
use App\Models\Material;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Activity::truncate();
        Tag::truncate();
        Material::truncate();

        $tag = new Tag;
        $tag->name = "Etiqueta 1";
        $tag->save();

        $material = new Material;
        $material->name = "Digital";
        $material->save();
        $material = new Material;
        $material->name = "Fisico";
        $material->save();

        $activity = new Activity;
        $activity->title = "1 ACTIVIDAD";
        $activity->url = Str::slug("Mi primer actividad");
        $activity->description = "descripcion de la actividad";
        $activity->url_base = "www.example.com";
        $activity->url_inscription = "www.example.com";
        $activity->published_at = Carbon::now();
        
        $activity->save();

    }
}
