<?php

namespace App\Http\Controllers;

use App\Laravue\JsonResponse;
use App\Repositories\UserRepository;
use App\User;
use App\Validators\UserValidator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * @var UserValidator
     */
    protected $validator;

    /**
     * UsersController constructor.
     *
     * @param UserRepository $repository
     * @param UserValidator $validator
     */
    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ($token = $this->guard()->attempt($credentials)) {
            $user = Auth::user();
            return response()->json(new JsonResponse([$user]), Response::HTTP_OK)->header('Authorization', $token);
        }
        return response()->json(new JsonResponse([], 'login_error'), Response::HTTP_UNAUTHORIZED);
    }

    public function signup(Request $request)
    {
        $attributes = $request->all();
        try {
            $this->validator->with($attributes)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $attributes['password'] = bcrypt($attributes['password']);
            $user = $this->repository->skipPresenter()->create($attributes);
            $response = [
                'message' => 'Đã đăng ký thành công, xin mời đăng nhập !',
                'status' => 'success',
            ];

            if ($request->wantsJson()) {
                return response()->json($response);
            }

        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag(),
                ], 400);
            }

        }
    }

    private function guard()
    {
        return Auth::guard();
    }

}
