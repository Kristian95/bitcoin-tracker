<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribePostRequest;
use App\Http\Controllers\Controller;
use App\Interfaces\SubscribeRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\Log;

class SubscribeController extends Controller
{
    protected SubscribeRepositoryInterface $repository;

    public function __construct(SubscribeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(SubscribePostRequest $request)
    {
        try {
            $this->repository->createSubscriber($request->all());

            return response()->json(['success' => true]);
        } catch (Exception $exception) {
            Log::error($exception);
            return response()->json(['success' => false]);
        }
    }
}
