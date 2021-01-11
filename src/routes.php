<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Anomatopeya\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Anomatopeya\Calculator\CalculatorController@subtract');
