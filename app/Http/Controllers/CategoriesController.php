<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Validators\CategoryValidator;
use Illuminate\Http\Request;
use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\Exceptions\ValidatorException;

class CategoriesController extends Controller
{
    /**
     * @var CategoryRepository
     */
    protected $repository;

    /**
     * @var CategoryValidator
     */
    protected $validator;

    /**
     * CategoriesController constructor.
     *
     * @param CategoryRepository $repository
     * @param CategoryValidator $validator
     */
    public function __construct(CategoryRepository $repository, CategoryValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->repository->skipPresenter()->get()->toTree();
        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'data' => $categories,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $this->repository->skipPresenter()->create($data);
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Thêm thành công ',
                ]);
            }
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag(),
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->repository->find($id);
        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'data' => $category,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $this->validator->with($data)->setId($id)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $category = $this->repository->skipPresenter()->update($data, $id);
            $response = [
                'status' => 'success',
                'message' => 'Chỉnh sửa thành công',
            ];
            if ($request->wantsJson()) {
                return response()->json($response);
            }
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag(),
                ]);
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->repository->skipPresenter()->find($id);
        if (!$category) {
            return response()->json([
                'message' => 'Không tìm thấy yêu cầu',
                'status' => false,
            ], 401);
        }
        if ($category->products && count($category->products) > 0) {
            return response()->json([
                'message' => 'Danh mục này không thể xóa',
                'status' => false,
            ], 401);
        }

        if ($category->isLeaf()) {
            $category->delete();
            return response()->json([
                'message' => 'Danh mục xóa thành công',
                'status' => 'success',
            ]);
        }
        return response()->json([
            'message' => 'Không thể xóa danh mục này, Vui lòng thử lại',
            'status' => false,
        ], 401);
    }
}
