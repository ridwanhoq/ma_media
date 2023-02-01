<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Components\Setting;
use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRegisterRepository;
use App\Http\Resources\RegisterLoginResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterApiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerRequires(Request $request)
    {
        try {

            $this->apiSuccess();
            $this->data = [
                "name",
                "email",
                "password"
            ];

            return $this->apiOutput(
                200,
                "Required fields for registration"
            );
        } catch (Exception $error) {
            $this->storeCrudeExceptionLog($error);

            return $this->apiOutput(
                Setting::$catch_error_message
            );
        }
    }

    public function register()
    {

        try {
            $request = request();

            $validation = Validator::make(
                $request->all(),
                User::registerRules()
            );

            if ($validation->fails()) {
                return $this->apiOutput(
                    400,
                    Setting::$validation_error_message,
                    array_values($validation->errors()->messages())
                );
            }

            $user = User::create(
                (new UserRegisterRepository())->formData()
            );

            $this->data = new RegisterLoginResource($user);

            return $this->apiOutput(
                200, 
                "User registration successful"
            );

        } catch (Exception $error) {
            return $error;
            $this->storeCrudeExceptionLog($error);

            return $this->apiOutput(
                Setting::$catch_error_message
            );
        }
    }
}
