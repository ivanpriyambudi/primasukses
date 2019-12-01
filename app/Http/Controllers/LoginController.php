<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
  
  public function postLogin(Request $request)
  {
      // Validate the form data
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required'
    ]);
      // Attempt to log the user in
      // Passwordnya pake bcrypt
    if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('/admin');
    } else if (Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
      return redirect()->intended('/user/dashboard');
    }
    return redirect()->route('HomeJoin');
  }
  public function logout()
  {
    if (Auth::guard('admin')->check()) {
      Auth::guard('admin')->logout();
    } elseif (Auth::guard('user')->check()) {
      Auth::guard('user')->logout();
    }
    return redirect('/');
  }
  public function register(Request $request)
  {
      $user=new User();
      $user->nama=$request->nama;
      $user->email=$request->email;
      $user->telp=$request->nomor;
      $user->username=$request->username;
      $user->password=Hash::make($request->password);
      $user->jenjang=$request->jenjang;
      $user->save();
      return redirect()->route('HomeJoin');
  }
}