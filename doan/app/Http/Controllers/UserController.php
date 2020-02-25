<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Utils\UploadFile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
class UserController extends Controller
{
    public function getRoles()
    {
        $roles = DB::table('users')
            ->select(DB::raw('distinct role'))
            ->get();
        return $roles;
    }
    public function getUserInfo($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->get();

        return $user;
    }
    public function getUserInfo1($userid)
    {
        $user = DB::table('users')
            ->where('id', $userid)
            ->get();
        return $user;
    }
    public function changePassword(Request $request){
        $currentPassword=$request->currentPassword;
        $newPassword=$request->newPassword;
        if(Auth::check())
        {
            // $id=Auth::user()->id;
            $user=Auth::user();
            $username=Auth::user()->username;
            // $user=User::find($id);
            $pass=$user->password;
            info($pass);
            info($currentPassword);
            if(Auth::attempt(['username'=>$username,'password'=>$currentPassword]))
            {
                // info(bcrypt($newPassword))
                info("hello");
                $user->password=bcrypt($newPassword);
                $user->save();
                return 1;
            }
            else
            return 0;

        }
    
}

    public function updateUser(Request $req, $id)
    {
        // extract data from input
        $username = $req->input(('username'));
        $fullname = $req->input(('fullname'));
        $email = $req->input(('email'));
        $role = $req->input(('role'));
        $dob = $req->input(('dob'));
        $dob = str_replace('-', '/', $dob);
        $address = $req->input(('address'));
        $dob = Carbon::parse($dob)->format('Y/m/d');

        $updateArr = [
            'username' => $username,
            'fullname' => $fullname,
            'address' => $address,
            'email' => $email,
            'role' => $role,
            'dob' => $dob,
        ];

        // process upload image
        $hasFile = $req->hasFile('file');
        if ($hasFile) {
            $file = $req->file('file');

            $newImageURL = UploadFile::uploadFile('upload', $file);

            $updateArr['image'] = $newImageURL;
        }

        DB::table('users')
            ->where('id', $id)
            ->update(
                $updateArr
            );
        return 1;
    }

    public function deleteUser($id)
    {
        info('delete user '.$id);
        // delete bill details linked with staff
        DB::table('bill_detail')
            ->join('bill', 'bill_detail.billID', '=', 'bill.id')
            ->where('bill.createdBy', $id)
            ->delete();
        // delete bill link with staff
        DB::table('bill')
            ->where('createdBy', $id)
            ->delete();

        // delete bill details linked with customer
        DB::table('bill_detail')
            ->join('bill', 'bill_detail.billID', '=', 'bill.id')
            ->where('bill.customerID', $id)
            ->delete();
        // delete bill link with customer
        DB::table('bill')
            ->where('customerID', $id)
            ->delete();
        
        DB::table('users')
            ->where('id', $id)
            ->delete();
        return 1;
    }
    public function deleteUser1($id)
    {

        DB::table('bill_detail')
            ->join('bill', 'bill.id', '=', 'bill_detail.billID')
            ->where('bill.customerID', $id)
        // ->select('bill.id')
            ->delete();

        DB::table('bill')
            ->where('customerID', $id)
            ->delete();
        DB::table('users')
            ->where('id', $id)
            ->delete();
        return 1;
    }
    
}
