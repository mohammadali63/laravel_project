<?php

namespace App\Http\Controllers;

use App\Models\Useradd;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private  $user,$image,$imageNewname,$imageUrl,$directory;
    public function index()
    {
        return view('admin.user.useradd');
    }
    public function NewUser(Request $request)
    {
        $this->user = new Useradd();
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->image = $this->SaveImage($request);
        $this->user->save();
        return back();
    }

    public function saveImage($request)
    {
        $this->image = $request->file('image');
        $this->imageNewname =rand().'.'.$this->image ->getClientOriginalExtension();
        $this->directory ='adminAsset/user-image/';
        $this->imageUrl = $this->directory.$this->imageNewname;
        $this->image->move($this->directory,$this->imageNewname);
        return $this->imageUrl;
    }


    public function manage()
    {
        return view('admin.user.usermanage',[
            'infos' => Useradd::all()
        ]);
    }

    public function userEdit($id)
    {
        return view('admin.user.edit',
        [
            'editinfos'=> Useradd::find($id)->get()
        ]);
    }
    public function userUpdate(Request $request)
    {

    }
    public function Delete(Request $request)
    {
        $this->user = Useradd::find($request->userdelete_id);
        if ($this->user->image) {
            if (file_exists($this->user->image)) {
                unlink($this->user->image);
            }
        }
        $this->user->delete();
        return back()->with('massage','delete Successfully');
    }
}
