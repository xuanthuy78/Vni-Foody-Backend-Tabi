<?php

namespace App\Http\Controllers;

use App\Entities\ProductImage;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Validators\ProductValidator;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class ProductController extends Controller
{
    /**
     * @var ProductRepository
     */
    protected $repository;

    /**
     * @var ProductValidator
     */
    protected $validator;

    /**
     * ProductsController constructor.
     *
     * @param ProductRepository $repository
     * @param ProductValidator $validator
     */
    public function __construct(ProductRepository $repository, ProductValidator $validator)
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
        $products = $this->repository->paginate($limit);
        if (\request()->wantsJson()) {
            return [
                'status' => 'success',
                'data' => $products,
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        try {
            $this->validator->with($attributes)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $product = $this->repository->skipPresenter()->create($attributes);

            $dataRelationImage = [];
            if (!empty($attributes['image'])) {
                // $arrImage = json_decode($attributes['image'], true);
                $arrImage = $attributes['image'];
                if ($arrImage && is_array($arrImage)) {
                    foreach ($arrImage as $image) {
                        array_push($dataRelationImage, new ProductImage(['image' => $image]));
                    }
                }
            }
            $product->images()->saveMany($dataRelationImage);
            $response = [
                'message' => 'Product created.',
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->repository->find($id);
        $productImage = $product->images;
        $dataProduct = [];
        array_push($dataProduct, $product);
        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'data' => $dataProduct,
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
        //
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
        //
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
                'status' => 'success',
                'message' => 'Xóa sản phẩm thành công',
            ]);
        }
    }
}
