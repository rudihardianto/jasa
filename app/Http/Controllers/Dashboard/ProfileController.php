<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Profile\UpdateDetailUserRequest;
use App\Http\Requests\Dashboard\Profile\UpdateProfileRequest;
use App\Models\DetailUser;
use App\Models\ExperienceUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      $user            = User::where('id', Auth::user()->id)->first();
      $experience_user = ExperienceUser::where('detail_user_id', $user->detail_user->id)->orderBy('id', 'asc')->get();

      return view('pages.dashboard.profile', compact('user', 'experience_user'));
   }

   public function update(UpdateProfileRequest $request_profile, UpdateDetailUserRequest $request_detail_user)
   {
      $data_profile     = $request_profile->all();
      $data_detail_user = $request_detail_user->all();

      //   get photo
      $get_photo = DetailUser::where('users_id', Auth::user()->id)->first();

      //   delete old file from storage
      if (isset($data_detail_user['photo'])) {
         $data = 'storage/' . $get_photo['photo'];
         if (Storage::files($data)) {
            Storage::delete($data);
         } else {
            Storage::delete('storage/app/public/' . $get_photo['photo']);
         }

         //  create file to storage
         if (isset($data_detail_user['photo'])) {
            $data_detail_user['photo'] = $request_detail_user->file('photo')->store('assets/photo', 'public');
         }

         //  save file to users
         $user = User::find(Auth::user()->id);
         $user->update($data_profile);

         //  save file to detail users
         $detail_user = DetailUser::find($user->detail_user->id);
         $detail_user->update($data_detail_user);

         //
         //  proses save experience user
         $experience_user_id = ExperienceUser::where('detail_user_id', $detail_user['id'])->first();
         if (isset($experience_user_id)) {
            foreach ($data_profile['experience'] as $key => $value) {
               $experience_user                 = ExperienceUser::find($key);
               $experience_user->detail_user_id = $detail_user['id'];
               $experience_user->experience     = $value;
               $experience_user->save();
            }
         } else {
            foreach ($data_profile['experience'] as $key => $value) {
               if (isset($value)) {
                  $experience_user                 = new ExperienceUser;
                  $experience_user->detail_user_id = $detail_user['id'];
                  $experience_user->experience     = $value;
                  $experience_user->save();
               }
            }
         }
      }
      Alert::success('Data berhasil di UPDATE');

      return back();
   }

   //    custom
   public function delete()
   {
      //    ambil data user
      $get_user_photo = DetailUser::where('users_id', Auth::user()->id)->first();
      $path_photo     = $get_user_photo['photo'];

      //   second update value to null
      $data        = DetailUser::find($get_user_photo['id']);
      $data->photo = null;
      $data->save();

      //   delete
      $data = 'storage/' . $path_photo;
      if (Storage::files($data)) {
         Storage::delete($data);
      } else {
         Storage::delete('storage/app/public/' . $path_photo['photo']);
      }
      Alert::success('Data berhasil di HAPUS');

      return back();

   }

}