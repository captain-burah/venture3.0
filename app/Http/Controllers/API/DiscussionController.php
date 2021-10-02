<?php

namespace App\Http\Controllers\API;

use App\Discussion;
use App\Reply;
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
        $target = Discussion::with('channel')->with('lecturer')->with('user')->get();
        return $target;
    }

    public function createDiscussion(Request $request){
        if ($request['user'] === 'tutor')
        {
            $new = [
                'name'=>$request['name'],
                'content'=>$request['content'],
                'lecturer_id'=>$request['lecturer_id'],
                'channel_id'=>$request['channel_id'],
            ];
            Discussion::create($new);
    
            $target = Discussion::with('channel')->with('lecturer')->where('lecturer_id', $request['lecturer_id'])->latest()->get();
            return response([
                'status' => 'success',
                'data' => $target[0],
            ]);
        }
        else if ($request['user'] === 'user')
        {
            $new = [
                'name'=>$request['name'],
                'content'=>$request['content'],
                'user_id'=>$request['user_id'],
                'channel_id'=>$request['channel_id'],
            ];
            Discussion::create($new);
    
            $target = Discussion::with('channel')->with('user')->where('user_id', $request['user_id'])->latest()->get();
            return response([
                'status' => 'success',
                'data' => $target[0],
            ]);
        }
        
    }

    public function updateDiscussion(Request $request)
    {
        if ($request['user'] === 'tutor')
        {
            $updateD = [
                'name'=>$request['name'],
                'content'=>$request['content'],
                'channel_id'=>$request['channel_id'],
            ];
            Discussion::where("id", $request['id'])->update($updateD);
    
            $target = Discussion::with('channel')->with('lecturer')->where('lecturer_id', $request['lecturer_id'])->orderBy('updated_at', 'ACS')->get();
            return response([
                'status' => 'success',
                'data' => $target[0],
            ]);
        }
        else if ($request['user'] === 'user')
        {
            $updateD = [
                'name'=>$request['name'],
                'content'=>$request['content'],
                'channel_id'=>$request['channel_id'],
            ];
            Discussion::where("id", $request['id'])->update($updateD);
    
            $target = Discussion::with('channel')->with('user')->where('user_id', $request['user_id'])->orderBy('updated_at', 'ACS')->get();
            return response([
                'status' => 'success',
                'data' => $target[0],
            ]);
        }
    }

    public function deleteDiscussion(Request $request)
    {
        if (Discussion::where('id', $request['id'])->delete())
        {
            return response([
                'status' => 'success',
            ]);
        }
        else 
        {
            return response([
                'status' => 'success',
            ]);
        }
    }
}
