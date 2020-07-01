<?php

namespace App\Http\Controllers;

use App\Entities\OrderDetail;
use App\Repositories\OrdersRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * @var OrdersRepository
     */
    protected $repository;

    /**
     * @var OrdersValidator
     */
    protected $validator;

    /**
     * ProductsController constructor.
     *
     * @param ProductRepository $repository
     * @param ProductValidator $validator
     */
    public function __construct(OrdersRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = \request()->get('limit');
        $orders = $this->repository->paginate($limit);
        if (\request()->wantsJson()) {
            return [
                'status' => 'success',
                'data' => $orders,
            ];
        }
    }

    public function updateStatus(Request $request)
    {
        $data = $request->all();
        $order = $this->repository->skipPresenter()->skipCriteria()->find($data['id']);
        if (!$order) {
            return [
                'status' => 'failed',
                'message' => 'Đơn hàng không tồn tại',
            ];
        }
        $order->status = $data['status'];
        $order->update();
        if (\request()->wantsJson()) {
            return [
                'status' => 'success',
                'message' => 'Thay đổi trạng thái thành công',
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = $this->repository->find($id);
        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'data' => $order,
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
        $orderDetail = OrderDetail::where('order_id', $id)->get();
        foreach ($orderDetail as $item) {
            OrderDetail::destroy($item->id);
        }
        if (request()->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Xóa sản phẩm thành công',
            ]);
        }
    }
}
