<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\WilayahController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'api/daerahindonesia'], function () use ($router) {
    // Matches The "/api/" URL
    $router->get('/', function () use ($router) {
        return response()->json([
            'status'    => true,
            'message'   => 'Welcome To API Wilayah Indonesia',
            'author'    => 'ahmadshaleh',
            'github'    => 'https://github.com/ahmdsk',
            'dokumentasi' => [
                'provinsi'  => '[GET] /api/daerahindonesia/provinsi',
                'kota'      => '[GET] /api/daerahindonesia/kota/{id_provinsi}',
                'kecamatan' => '[GET] /api/daerahindonesia/kecamatan/{id_kota}',
                'kelurahan' => '[GET] /api/daerahindonesia/kelurahan/{id_kecamatan}',
            ]
        ]);
    });
    
    $router->get('/provinsi', 'WilayahController@provinsi');
    $router->get('/kota[/{id_provinsi}]', 'WilayahController@kota');
    $router->get('/kecamatan[/{id_kota}]', 'WilayahController@kecamatan');
    $router->get('/kelurahan[/{id_kecamatan}]', 'WilayahController@kelurahan');
});

$router->get('/', function ()  use ($router) {
    return redirect('/api/daerahindonesia');
});