<?php

namespace App\Http\Controllers;

use App\Entities\Order;
use App\Entities\Product;
use App\Http\Requests\OrderRequest;
use Cart;
use DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart($id)
    {
        $product = Product::find($id);
        $image = $product->avatar();
        $price = $product->promotion_price ? $product->promotion_price : $product->price;
        Cart::add($product->id, $product->name, $price, 1, ['image' => $image, 'alias' => $product->alias]);
        return response()->json(['count' => Cart::getTotalQuantity()], 200);
    }

    public function cardList()
    {

        // $product = Product::find(1);
        // $image = $product->avatar();
        // $price = $product->promotion_price ? $product->promotion_price : $product->price;
        // Cart::add($product->id, $product->name, $price, 1, ['image' => $image, 'alias' => $product->alias]);
        $carts = Cart::getContent();
        $total = Cart::getTotal();
        if (!count($carts)) {
            if (\request()->wantsJson()) {
                return [
                    'message' => 'Bạn chưa có sản phẩm nào trong giỏ hàng',
                ];
            }
        } else {
            if (\request()->wantsJson()) {
                return [
                    'status' => 'success',
                    'data' => $carts,
                    'total' => $total,
                ];
            }
        }
    }

    public function removeCart($id)
    {
        // Cart::add(array(
        //     array(
        //         'id' => 456,
        //         'name' => 'Sample Item 1',
        //         'price' => 67.99,
        //         'quantity' => 4,
        //         'attributes' => array(),
        //     ),
        //     array(
        //         'id' => 568,
        //         'name' => 'Sample Item 2',
        //         'price' => 69.25,
        //         'quantity' => 4,
        //         'attributes' => array(
        //             'size' => 'L',
        //             'color' => 'blue',
        //         ),
        //     ),
        // ));
        Cart::remove($id);
        if (\request()->wantsJson()) {
            return [
                'message' => 'Bạn đã xóa giỏ hàng',
            ];
        }
    }

    public function updateCart($id, Request $request)
    {
        $quantity = $request->quantity;
        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $quantity,
            ),
        ));
        if (\request()->wantsJson()) {
            return [
                'message' => 'Bạn đã update giỏ hàng thành công',
            ];
        }

    }

    public function create(OrderRequest $request)
    {
        Cart::add(array(
            array(
                'id' => 456,
                'name' => 'Sample Item 1',
                'price' => 67.99,
                'quantity' => 4,
                'attributes' => array(),
            ),
            array(
                'id' => 568,
                'name' => 'Sample Item 2',
                'price' => 69.25,
                'quantity' => 4,
                'attributes' => array(
                    'size' => 'L',
                    'color' => 'blue',
                ),
            ),
        ));
        $carts = Cart::getContent();
        if (!count($carts)) {
            if (\request()->wantsJson()) {
                return [
                    'message' => 'Bạn chưa có sản phẩm nào trong giỏ hàng',
                ];
            }
        }
        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['total'] = Cart::getTotal();
            $order = Order::create($data);
            foreach ($carts as $cart) {
                $order->products()->attach($cart->id, [
                    'number' => $cart->quantity,
                    'price' => $cart->price,
                ]);
            }
            DB::commit();
            Cart::clear();
            if (\request()->wantsJson()) {
                return [
                    'message' => 'Bạn đã create giỏ hàng thành công',
                ];
            }

        } catch (\Exception $e) {
            DB::rollBack();
            toastError('Đã xảy ra lỗi');
            return redirect()->route('home');
        }
    }

}
