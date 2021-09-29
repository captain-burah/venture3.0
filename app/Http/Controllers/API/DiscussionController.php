<?php

namespace App\Http\Controllers\API;

use App\Discussion;
use App\Channel;
use App\User;
use App\Lecturer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

class DiscussionController extends Controller
{
    public function index(){
        return Discussion::all()->sortBy("name");
    }
}
