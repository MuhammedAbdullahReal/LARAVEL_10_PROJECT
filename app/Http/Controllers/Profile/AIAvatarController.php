<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\AIAvatarRequest;
use Illuminate\Support\Facades\Storage;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Str;
use App\Models\User;


class AIAvatarController extends Controller
{
    public function AddAIAvatar(AIAvatarRequest $request)
    {
        if ($oldavatar = $request->user()->avatar) {
           
            Storage::disk('public')->delete($oldavatar);
        }

        $result = OpenAI::images()->create([
            'prompt' => $request->avatar_description,
            'n' => 1,
            "size" => '256x256'
        ]);

        $url = $result->data[0]->url;

        $imageContent = file_get_contents($url);

        $imageName = Str::random(60).'.jpg';

       
        $path = Storage::disk('public')->put('avatars/'.$imageName, $imageContent);



        auth()->user()->update(['avatar' => "avatars/$imageName"]);

        return back();
    }
}
