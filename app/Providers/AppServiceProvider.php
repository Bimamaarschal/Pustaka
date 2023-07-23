<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('max_words', function ($attribute, $value, $parameters, $validator) {
            $maxWords = (int) $parameters[0];
            $wordCount = str_word_count($value);
            return $wordCount <= $maxWords;
        });
    }
}
