<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Utils\SystemParam;
use App\User;
use Illuminate\Support\Facades\Validator;
use Carbon;
use JWTAuth;
class UserController extends Controller
{
    public function loginUser(Request $request)
    {
        $input = $request->only('phone', 'password');
        $user = null;
        if ($request->phone) {
            $user = User::where('phone', $input['phone'])->first();
            if (!$user) {
                return $this->responseApi(SystemParam::status_error, SystemParam::code_invaild, SystemParam::message_login_user_not_found, null);
            }
        }
        $token = null;
        if (!$token = JWTAuth::fromUser($user, ['exp' => Carbon\Carbon::now()->addDays(7)->timestamp])) {
            return $this->responseApi(SystemParam::status_error, SystemParam::code_invaild, SystemParam::message_login_error, null);
        }
        $data1 = array(
            'token' => $token,
            'user' => $user,
        );
        return $this->responseApi(SystemParam::status_success, SystemParam::code_success, SystemParam::login_success, $data1);
    }
    public function getUserInfo()
    {
        $user = $this->getAuthenticatedUser();
        if (!$user) {
            return $this->responseApi(SystemParam::status_error, SystemParam::code_error_server, SystemParam::token_expired, null);
        }
        return $this->responseApi(SystemParam::status_success, SystemParam::code_success, '', $user);
    }
}
