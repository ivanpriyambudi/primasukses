<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Auth;
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
      return redirect()->intended('/admin/dashboard');
    } else if (Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
      return redirect()->intended('/user/dashboard');
    }
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
}