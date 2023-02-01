<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Components\Repositories\CrudExceptionRepository;
use App\Http\Components\Setting;
use App\Http\Controllers\Controller;
use App\Http\Resources\RegisterLoginResource;
use App\Models\CrudExceptionLog;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginApiController extends Controller
{

    public function loginRequires()
    {
        try {

            $this->apiSuccess();
            $this->data = [
                'email',
                'password'
            ];

            return $this->apiOutput(
                200,
                "Required fields for login"
            );
        } catch (Exception $error) {

            $this->storeCrudeExceptionLog($error);

            return $this->apiOutput(
                Setting::$catch_error_message
            );
        }
    }

    public function login()
    {
        try {
            $request = request();
            // return $request->all();
            $validator = Validator::make(
                [
                    'email'     => $request->email,
                    'password'  => $request->password
                ],
                User::loginRules()
            );

            if ($validator->fails()) {
                return $this->apiOutput(
                    400,
                    Setting::$validation_error_message,
                    array_values(
                        $validator->errors()->messages()
                    )
                );
                return $validator->errors();
            }

            $user = User::query()
                ->where('email', $request->email)
                ->first();

            if ($user === null) {
                return $this->apiOutput(
                    400,
                    "This email is not registered"
                );
            }
            
            if (
                ! auth()->attempt([
                    'email'         => $request->email,
                    'password'      => $request->password
                ])
            ) {
                return $this->apiOutput(
                    400,
                    "Invalid credentials"
                );
            }

            $this->api_token = $user->createToken('myApp')->plainTextToken;
            $this->data = new RegisterLoginResource($user);

            return $this->apiOutput(
                200,
                "You have successfully login"
            );
        } catch (Exception $error) {

            $this->storeCrudeExceptionLog($error);

            return $this->apiOutput(
                Setting::$catch_error_message
            );
        }
    }
}
