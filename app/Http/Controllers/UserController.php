<?php

namespace App\Http\Controllers;

use App\Entities\Comment;
use App\Entities\OrderDetail;
use App\Entities\Orders;
use App\Entities\Product;
use App\Laravue\JsonResponse;
use App\Repositories\UserRepository;
use App\User;
use App\Validators\UserValidator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
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
        return response()->json(new JsonResponse([], 'Mật khẩu không đúng'), Response::HTTP_UNAUTHORIZED);
    }

    public function signup(Request $request)
    {
        $attributes = $request->all();
        try {
            $this->validator->with($attributes)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $attributes['password'] = Hash::make($attributes['password']);
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

    public function logout()
    {
        $this->guard()->logout();
        if (\request()->wantsJson()) {
            return [
                'status' => 'success',
            ];
        }
    }

    public function userProfile()
    {
        if (Auth::user()) {
            $user = Auth::user();
            if (\request()->wantsJson()) {
                return [
                    'status' => 'success',
                    'data' => $user,
                ];
            }
        } else {
            if (\request()->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => 'vui lòng đăng nhập',
                ], 400);
            }
        }

    }

    public function userUpdate(Request $request, $id)
    {
        try {
            $attributes = $request->all();
            $this->validator->with($attributes)->setId($id)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $user = $this->repository->skipPresenter()->update($attributes, $id);
            $response = [
                'status' => 'success',
                'messsage' => 'Chỉnh sửa sản phẩm thành công',
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag(),
                ], 500);
            }

        }
    }

    public function changePassword(Request $request, $id)
    {
        $user = User::find($id);

        if (Hash::check(Input::get('oldpassword'), $user->password)) {
            try {
                $attributes = $request->all();
                $this->validator->with($attributes)->setId($id)->passesOrFail(ValidatorInterface::RULE_UPDATE);
                $attributes['password'] = Hash::make($attributes['newpassword']);
                $user = $this->repository->skipPresenter()->update($attributes, $id);
                if (\request()->wantsJson()) {
                    return [
                        'status' => 'Thay đổi mật khẩu thành công',
                    ];
                }
            } catch (ValidatorException $e) {
                if ($request->wantsJson()) {
                    return response()->json([
                        'error' => true,
                        'message' => $e->getMessageBag(),
                    ], 500);
                }

            }
        } else {
            if (\request()->wantsJson()) {
                return [
                    'status' => 'Vui lòng nhập đúng mật khẩu cũ',
                ];
            }
        }
    }

    public function viewCartByUser()
    {
        if (Auth::user()) {
            $id = Auth::user()->id;
            $orders = Orders::where('user_id', $id)->paginate(10);
            if (request()->wantsJson()) {
                return response()->json([
                    'status' => 'success',
                    'data' => $orders,
                ]);
            }
        } else {
            if (\request()->wantsJson()) {
                return [
                    'status' => 'Vui lòng đăng nhập',
                ];
            }
        }
    }

    public function detailCartByUser($id)
    {
        if (Auth::user()) {
            $orders = OrderDetail::where('order_id', $id)->paginate(10);
            if (request()->wantsJson()) {
                return response()->json([
                    'status' => 'success',
                    'data' => $orders,
                ]);
            }
        }
    }

    public function deleteCartByUser($id)
    {
        if (Auth::user()) {
            Orders::destroy($id);
            OrderDetail::destroy($id);
            return response()->json([
                'success' => true,
                'message' => 'Xóa đơn hàng thành công',
            ]);
        }
    }

    public function comment(Request $request, $id)
    {
        if (Auth::check()) {
            $product = Product::find($id);
            $comment = new Comment;
            $comment->product_id = $id;
            $comment->user_id = Auth::id();
            $comment->content = $request->comment;
            $comment->save();
            $comment->name = Auth::user()->name;
            $comment->is_admin = Auth::user()->is_admin;
            if (request()->wantsJson()) {
                return response()->json([
                    'status' => 'Thêm thành bình luận thành công',
                ]);
            }
        } else {
            if (\request()->wantsJson()) {
                return [
                    'status' => 'Vui lòng đăng nhập',
                ];
            }
        }
    }

    public function deleteComment(Request $request, $id)
    {
        if (Auth::check()) {
            $comment = Comment::findOrFail($id);
            $comment->delete();
            if (request()->wantsJson()) {
                return response()->json([
                    'status' => 'Xóa bình luận thành công',
                ]);
            }
        } else {
            if (\request()->wantsJson()) {
                return [
                    'status' => 'Vui lòng đăng nhập',
                ];
            }
        }
    }

    private function guard()
    {
        return Auth::guard();
    }

}
