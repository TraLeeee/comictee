<?php

namespace Database\Seeders;

use App\Models\TranslationTeam;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $authors = \App\Models\Author::factory(10)->create();
        $authorIdArray = $authors->map(function ($author) {
            return $author->id;
        })->toArray();

        \App\Models\User::factory(10)->create()->each(function ($user) use ($authorIdArray) {
            if ($user->role == config('constants.role.translation_team')) {
                TranslationTeam::factory(1)
                    ->create(['owner_id' => $user->id])
                    ->each(function ($translationTeam) use ($authorIdArray, $user) {
                        //Get random author id
                        $author = array_rand($authorIdArray);
                        \App\Models\Comic::factory(1)->create([
                            'user_id' => $user->id,
                            'translation_team_id' => $translationTeam->id,
                            'author_id' => $authorIdArray[$author],
                        ]);
                    });
            }
        });
    }
}
