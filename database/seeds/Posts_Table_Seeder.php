<?php
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class Posts_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 40; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->realText(40);
            $newPost->author = $faker->name(40);
            $newPost->post_date = $faker->dateTime();
            $newPost->post_img = $faker->imageUrl();
            $newPost->post_content = $faker->paragraphs(3, true);

            $newPost->save();

        }
        
    }
}
