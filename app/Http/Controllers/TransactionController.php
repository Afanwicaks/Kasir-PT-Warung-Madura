<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    // Pastikan hanya autentikasi yang bisa mengakses
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Menampilkan halaman transaksi
    public function index()
    {
        $transactions = Transaction::with('user')->latest()->get();
        return view('transactions.index', compact('transactions'));
    }

    // Menyimpan transaksi baru
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);
        if(empty($cart)) {
            return redirect()->back()->with('error', 'Keranjang kosong.');
        }

        DB::beginTransaction();

        try {
            $total = 0;
            foreach($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }

            $transaction = Transaction::create([
                'user_id' => auth()->id(),
                'total' => $total,
            ]);

            foreach($cart as $product_id => $item) {
                TransactionItem::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $product_id,
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);

                // Update stok produk
                $product = Product::findOrFail($product_id);
                $product->decrement('stock', $item['quantity']);
            }

            // Kosongkan keranjang
            session()->forget('cart');

            DB::commit();
            return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dilakukan.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat melakukan transaksi.');
        }
    }
}
