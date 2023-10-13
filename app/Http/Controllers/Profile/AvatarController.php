<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Support\Facades\Storage;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Str;
use App\Models\User;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request)
    {

        if ($oldavatar = $request->user()->avatar) {

            Storage::disk('public')->delete($oldavatar);
        }


        $path = Storage::disk('public')->put('avatars', $request->avatar);

        auth()->user()->update(['avatar' => "/$path"]);

        return back();
        

    }
}
