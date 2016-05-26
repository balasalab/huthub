<?php

namespace App\Http\Controllers;

use Redis;
use App\Http\Controllers\Controller;

class RedisController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function test()
    {
        $redis = Redis::connection();
        $redis->set('name', 'Taylor');
        echo $redis->key('*');
    }
}