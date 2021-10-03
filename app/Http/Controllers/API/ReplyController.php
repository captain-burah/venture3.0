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

class ReplyController extends Controller
{
    public function index($did){
        $target = Reply::with('discussion')->with('lecturer')->with('user')->where('discussion_id', $did)->get();
        return response([
            'data'=>$target,
        ]);
    }

    public function createReply(Request $request){
        if ($request['user'] === 'tutor')
        {
            $new = [
                'content'=>$request['content'],
                'lecturer_id'=>$request['lecturer_id'],
                'discussion_id'=>$request['discussion_id'],
            ];
            Reply::create($new);
    
            $target = Reply::with('discussion')->with('lecturer')->where('lecturer_id', $request['lecturer_id'])->latest()->get();
            return response([
                'status' => 'success',
                'data' => $target[0],
            ]);
        }
        else if ($request['user'] === 'user')
        {
            $new = [
                'content'=>$request['content'],
                'user_id'=>$request['user_id'],
                'discussion_id'=>$request['discussion_id'],
            ];
            Reply::create($new);
    
            $target = Reply::with('discussion')->with('user')->where('user_id', $request['user_id'])->latest()->get();
            return response([
                'status' => 'success',
                'data' => $target[0],
            ]);
        }
        
    }

    public function updateReply(Request $request)
    {
        if ($request['user'] === 'tutor')
        {
            $updateR = [
                'content'=>$request['content'],
            ];
            Reply::where("id", $request['id'])->update($updateR);
    
            $target = Reply::with('discussion')->with('lecturer')->where('lecturer_id', $request['lecturer_id'])->orderBy('updated_at', 'ACS')->get();

            return response([
                'status' => 'success',
                'data' => $target[0],
            ]);
        }
        else if ($request['user'] === 'user')
        {
            $updateR = [
                'content'=>$request['content'],
            ];
            Reply::where("id", $request['id'])->update($updateR);
    
            $target = Reply::with('discussion')->with('user')->where('user_id', $request['user_id'])->orderBy('updated_at', 'ACS')->get();
            
            return response([
                'status' => 'success',
                'data' => $target,
            ]);
        }
    }

    public function deleteReply(Request $request)
    {
        if (Reply::where('id', $request['id'])->delete())
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
