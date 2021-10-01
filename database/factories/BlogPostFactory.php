<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogPost as BlogPost;
use App\User as User;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        //Blog Post Factory
        'title' => $this->faker->sentence, //Generates a fake sentence
        'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
        'user_id' =>  $faker->randomElement($users) //Generates a User from factory and extracts id
    ];
});
