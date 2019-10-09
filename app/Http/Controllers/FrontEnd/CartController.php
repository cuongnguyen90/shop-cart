<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Cart;
use App\Http\Repositories\Products\ProductInterfaceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $product;

    public function __construct(ProductInterfaceRepository $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCart()
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            $currentCart = new Cart($oldCart);
            $totalQty = $currentCart->totalQty;
            $totalPrice = $currentCart->totalPrice;
            $product = $currentCart->items;
            return view('cart', compact('totalQty', 'totalPrice', 'product'));
        }

    }

    public function add(Request $request)
    {
        $item = $this->product->get($request->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($request->id, $item);
        Session::put('cart', $cart);
        return redirect()->back();

    }

    public function removeItem(Request $request)
    {
        $idItem = $request->id;

        $oldCart = Session::has('cart') ? Session::get('cart') : null ;

        $cart = new Cart($oldCart);

        //dd($cart);

        $cart->removeItem($idItem);

        Session::put('cart',$cart);

        return redirect()->route('get.cart');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
