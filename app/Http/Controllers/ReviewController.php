<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'star_rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        // Simpan ulasan pelanggan ke database
        $review = new Review();
        $review->customer_name = $request->input('customer_name');
        $review->star_rating = $request->input('star_rating');
        $review->comment = $request->input('comment');
        $review->save();

        // Redirect atau kembalikan respons yang sesuai
        return redirect('/')->with('success', 'Review submitted successfully!');
    }
}

