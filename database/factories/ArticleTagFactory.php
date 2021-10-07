<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Tag;
use App\Models\ArticleTag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $articles = Article::pluck('id')->toArray();
        $tags = Tag::pluck('id')->toArray();
        return [
            'article_id' => $this->faker->randomElement($articles),
            'tag_id' => $this->faker->randomElement($tags),
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