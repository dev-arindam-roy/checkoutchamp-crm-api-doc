<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('checkoutchamp-crm-api-doc', function() {
    return Redirect::to('https://apidocs.checkoutchamp.com/');
});
