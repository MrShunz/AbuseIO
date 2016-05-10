<?php

Route::group(
    [
        'prefix' => 'domains',
        'as'     => 'domains.',
    ],
    function () {
        Route::get(
            '',
            [
                'as'   => 'index',
                'uses' => 'DomainsController@apiIndex',
            ]
        );

        Route::get(
            '{domains}',
            [
                'as'   => 'show',
                'uses' => 'DomainsController@apiShow',
            ]
        );

        Route::delete(
            '{domains}',
            [
                'as'   => 'delete',
                'uses' => 'DomainsController@apiDestroy',
            ]
        );
//
//        Route::post(
//            '',
//            [
//                'as'   => 'store',
//                'uses' => 'DomainsController@apiStore',
//            ]
//        );
//
//        Route::put(
//            '{domains}',
//            [
//                'as'   => 'update',
//                'uses' => 'DomainsController@apiUpdate',
//            ]
//        );
    }
);