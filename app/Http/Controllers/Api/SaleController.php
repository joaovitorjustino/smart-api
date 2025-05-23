<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Http\Resources\SaleResource;
use App\Http\Requests\StoreSaleRequest;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::all();
        return SaleResource::collection($sales);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        $sale = Sale::create($request->validated());
        return new SaleResource($sale);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSaleRequest $request, Sale $sale)
    {
        $sale->update($request->validated());
        return new SaleResource($sale);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return response(null, 204);
    }
}
