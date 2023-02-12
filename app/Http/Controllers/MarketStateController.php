<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\MarketStateRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\Log;

class MarketStateController extends Controller
{
    protected MarketStateRepositoryInterface $repository;

    public function __construct(MarketStateRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getData()
    {
        try {
            return response()->json(['success' => true, 'data' => $this->repository->fetchData()]);
        } catch (Exception $exception) {
            Log::error($exception);
            return response()->json(['success' => false, 'data' => []]);
        }
    }
}
