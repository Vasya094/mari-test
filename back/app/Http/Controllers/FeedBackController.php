<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedBackRequest;
use App\Http\Requests\UpdateFeedBackRequest;
use App\Models\FeedBack;
use Database\Factories\FeedBackFactory;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = FeedBack::with('writer')->get();

        return $feedbacks;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedBackRequest $request)
    {
        $data = $request->all();
        // $data['type'] = collect(['database', 'email'])->random();
        $data['type'] = 'database';

        $dataFactory = new FeedBackFactory($data);
        $newItem = $dataFactory->save();
        
        return response()->json(['message' => 'Data has been processed', 'data' => $newItem]);
    }

    /**
     * Display the specified resource.
     */
    public function show(FeedBack $feedBack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeedBack $feedBack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeedBackRequest $request, FeedBack $feedBack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeedBack $feedBack)
    {
        //
    }
}