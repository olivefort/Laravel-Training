<?php

namespace Database\Factories;

use App\Models\Commentaire;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class CommentaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commentaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $articles = Article::pluck('id')->toArray();
        return [
            'article_id' => $this->faker->randomElement($articles),
            'commentaire' => $this->faker->realText($MaxNbChars = 150),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}