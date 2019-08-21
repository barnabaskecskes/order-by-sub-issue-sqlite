<?php

use App\Click;
use App\Offer;

Route::get('works', function () {
    return Click::orderBy('created_at', 'asc')->get();
})->name('works');

Route::get('fails', function () {
    return Click::orderBySub(Offer::select('name')->whereColumn('offer_id', 'offers.id'), 'asc')->get();
})->name('fails');
