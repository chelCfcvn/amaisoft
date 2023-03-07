<?php

namespace App\Http\Controllers\Position;

use App\Http\Controllers\Controller;
use App\Models\Position;
use App\Services\PositionService;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    protected $positionService;

    public function __construct(PositionService $positionService)
    {
        $this->positionService = $positionService;
    }
    public function show()
    {
        return view('positions.show');
    }
    public function showCreate()
    {
        return view('positions.create');
    }
    public function showEdit(Position $position)
    {
        return view('positions.update', compact('position'));
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $this->positionService->create($data);
        return redirect()->route('position.show');
    }
    public function update(Position $position, Request $request)
    {
        $data = $request->all();
        $this->positionService->update($position, $data);
        return redirect()->route('position.show');
    }
    public function delete(Position $position)
    {
        $this->positionService->delete($position);
        return redirect()->route('position.show');
    }
}
