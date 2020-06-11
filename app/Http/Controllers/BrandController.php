<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\BrandRepository;
use App\Validators\BrandValidator;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class BrandController extends Controller
{
    /**
     * @var BrandRepository
     */
    protected $repository;

    /**
     * @var BrandValidator
     */
    protected $validator;

    /**
     * ProductsController constructor.
     *
     * @param BrandRepository $repository
     * @param BrandValidator $validator
     */
    public function __construct(BrandRepository $repository, BrandValidator $validator)
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
        $limit = \request()->get('limit');
        $brands = $this->repository->paginate($limit);
        if (\request()->wantsJson()) {
            return [
                'status' => 'success',
                'data' => $brands,
            ];
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
            $this->repository->create($data);
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
        $slider = $this->repository->find($id);
        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'data' => $slider,
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
        try {
            $data = $request->all();
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $this->repository->create($data);
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
            $this->repository->update($data, $id);
            $response = [
                'status' => 'success',
                'message' => 'Chỉnh sửa thành  công',
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
        $this->repository->delete($id);
        if (request()->wantsJson()) {
            return response()->json([
                'message' => 'Xóa thành công',
                'status' => 'success',
            ]);
        }
    }
}
