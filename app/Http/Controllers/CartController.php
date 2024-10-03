<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Menampilkan halaman cart
    public function index()
    {
        $cart = session()->get('cart', []);

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('cart.index', compact('cart', 'total'));
    }

    // Menambah atau mengurangi kuantitas produk di cart
    public function update(Request $request)
    {
        $cart = session()->get('cart');
        $productId = $request->input('product_id');
        $action = $request->input('action'); // Bisa 'increase' atau 'decrease'

        if (isset($cart[$productId])) {
            if ($action === 'increase') {
                $cart[$productId]['quantity']++;
            } elseif ($action === 'decrease' && $cart[$productId]['quantity'] > 1) {
                $cart[$productId]['quantity']--;
            }
        }

        session()->put('cart', $cart);
        return back()->with('success', 'Cart updated successfully!');
    }

    // Menghapus item dari cart
    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        $productId = $request->input('product_id');

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        session()->put('cart', $cart);
        return back()->with('success', 'Item removed successfully!');
    }

    // Proses pembayaran (contoh sederhana)
    public function pay()
    {
        // Logika pembayaran bisa diletakkan di sini
        session()->forget('cart');
        return redirect('/')->with('success', 'Payment successful!');
    }
}