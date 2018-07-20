<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePonenciaRequest;
use App\Http\Requests\UpdatePonenciaRequest;
use App\Repositories\PonenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Ponente;

class PonenciaController extends AppBaseController
{
    /** @var  PonenciaRepository */
    private $ponenciaRepository;

    public function __construct(PonenciaRepository $ponenciaRepo)
    {
        $this->ponenciaRepository = $ponenciaRepo;
    }

    /**
     * Display a listing of the Ponencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ponenciaRepository->pushCriteria(new RequestCriteria($request));
        $ponencias = $this->ponenciaRepository->all();

        return view('ponencias.index')
            ->with('ponencias', $ponencias);
    }

    /**
     * Show the form for creating a new Ponencia.
     *
     * @return Response
     */
    public function create()
    {
        $ponentes = Ponente::pluck('nombre', 'id');
        return view('ponencias.create', compact('ponentes'));
    }

    /**
     * Store a newly created Ponencia in storage.
     *
     * @param CreatePonenciaRequest $request
     *
     * @return Response
     */
    public function store(CreatePonenciaRequest $request)
    {
        $input = $request->all();

        $ponencia = $this->ponenciaRepository->create($input);

        Flash::success('Ponencia saved successfully.');

        return redirect(route('ponencias.index'));
    }

    /**
     * Display the specified Ponencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ponencia = $this->ponenciaRepository->findWithoutFail($id);

        if (empty($ponencia)) {
            Flash::error('Ponencia not found');

            return redirect(route('ponencias.index'));
        }

        return view('ponencias.show')->with('ponencia', $ponencia);
    }

    /**
     * Show the form for editing the specified Ponencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ponencia = $this->ponenciaRepository->findWithoutFail($id);
        $ponentes = Ponente::pluck('nombre', 'id');

        if (empty($ponencia)) {
            Flash::error('Ponencia not found');

            return redirect(route('ponencias.index'));
        }

        return view('ponencias.edit', compact('ponencia', 'ponentes'));
    }

    /**
     * Update the specified Ponencia in storage.
     *
     * @param  int              $id
     * @param UpdatePonenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePonenciaRequest $request)
    {
        $ponencia = $this->ponenciaRepository->findWithoutFail($id);

        if (empty($ponencia)) {
            Flash::error('Ponencia not found');

            return redirect(route('ponencias.index'));
        }

        $ponencia = $this->ponenciaRepository->update($request->all(), $id);

        Flash::success('Ponencia updated successfully.');

        return redirect(route('ponencias.index'));
    }

    /**
     * Remove the specified Ponencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ponencia = $this->ponenciaRepository->findWithoutFail($id);

        if (empty($ponencia)) {
            Flash::error('Ponencia not found');

            return redirect(route('ponencias.index'));
        }

        $this->ponenciaRepository->delete($id);

        Flash::success('Ponencia deleted successfully.');

        return redirect(route('ponencias.index'));
    }
}
