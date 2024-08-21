<?php

use Illuminate\Support\Facades\Route;
use Monosniper\LaravelTranslatable\Livewire\Translate;

if(config('translatable.subdomain')) {
    Route::get('/', Translate::class)
        ->domain(config('translatable.subdomain') . '.' . config('app.url'));
} else {
    Route::get('translate', Translate::class);
}
