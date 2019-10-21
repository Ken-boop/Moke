<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('home.profile');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'picture' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // 追加
        ], [], [
            'name' => 'ユーザー名',
            'email' => 'メールアドレス',
            'password' => 'パスワード',  
            'picture' => 'プロフィール画像'  // 追加   
        ]);
    }

    private function saveProfileImage($image)
    {
        // デフォルトではstorage/appに画像が保存されます。 
        // 第2引数にpublicをつけることで、storage/app/publicに保存されます。 
        // 今回は、/images/profilePictureをつけて、
        // storage/app/public/images/profilePictureに画像が保存されるようにしています。
        // 自分で指定しない場合、ファイル名は自動で設定されます。  
        $imgPath = $image->store('images/profilePicture', 'public');
    
       return 'storage/' . $imgPath;
    }

    protected function create(array $data)
    {
        $imgPath = $this->saveProfileImage($data['picture']);
    
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'picture_path' => $imgPath,
        ]);
    }
}
