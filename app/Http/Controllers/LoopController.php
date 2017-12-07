<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLoopRequest;
use App\Http\Requests\UpdateLoopRequest;
use App\Repositories\LoopRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LoopController extends AppBaseController
{
    /** @var  LoopRepository */
    private $loopRepository;

    public function __construct(LoopRepository $loopRepo)
    {
        $this->loopRepository = $loopRepo;
    }

    /**
     * Display a listing of the Loop.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->loopRepository->pushCriteria(new RequestCriteria($request));
        $loops = $this->loopRepository->all();

        return view('loops.index')
            ->with('loops', $loops);
    }

    /**
     * Show the form for creating a new Loop.
     *
     * @return Response
     */
    public function create()
    {
        return view('loops.create');
    }

    /**
     * Store a newly created Loop in storage.
     *
     * @param CreateLoopRequest $request
     *
     * @return Response
     */
    public function store(CreateLoopRequest $request)
    {
        $input = $request->all();

        $loop = $this->loopRepository->create($input);

        Flash::success('Loop saved successfully.');

        return redirect(route('loops.index'));
    }

    /**
     * Display the specified Loop.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $loop = $this->loopRepository->findWithoutFail($id);

        if (empty($loop)) {
            Flash::error('Loop not found');

            return redirect(route('loops.index'));
        }

        return view('loops.show')->with('loop', $loop);
    }

    /**
     * Show the form for editing the specified Loop.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $loop = $this->loopRepository->findWithoutFail($id);

        if (empty($loop)) {
            Flash::error('Loop not found');

            return redirect(route('loops.index'));
        }

        return view('loops.edit')->with('loop', $loop);
    }

    /**
     * Update the specified Loop in storage.
     *
     * @param  int              $id
     * @param UpdateLoopRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLoopRequest $request)
    {
        $loop = $this->loopRepository->findWithoutFail($id);

        if (empty($loop)) {
            Flash::error('Loop not found');

            return redirect(route('loops.index'));
        }

        $loop = $this->loopRepository->update($request->all(), $id);

        Flash::success('Loop updated successfully.');

        return redirect(route('loops.index'));
    }

    /**
     * Remove the specified Loop from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $loop = $this->loopRepository->findWithoutFail($id);

        if (empty($loop)) {
            Flash::error('Loop not found');

            return redirect(route('loops.index'));
        }

        $this->loopRepository->delete($id);

        Flash::success('Loop deleted successfully.');

        return redirect(route('loops.index'));
    }
}
