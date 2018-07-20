<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsistenteRequest;
use App\Http\Requests\UpdateAsistenteRequest;
use App\Repositories\AsistenteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Ponencia;

class AsistenteController extends AppBaseController
{
    /** @var  AsistenteRepository */
    private $asistenteRepository;

    public function __construct(AsistenteRepository $asistenteRepo)
    {
        $this->asistenteRepository = $asistenteRepo;
    }

    /**
     * Display a listing of the Asistente.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->asistenteRepository->pushCriteria(new RequestCriteria($request));
        $asistentes = $this->asistenteRepository->all();

        return view('asistentes.index')
            ->with('asistentes', $asistentes);
    }

    /**
     * Show the form for creating a new Asistente.
     *
     * @return Response
     */
    public function create()
    {
        $ponencias = Ponencia::pluck('nombre', 'id');
        return view('asistentes.create', compact('ponencias'));
    }

    /**
     * Store a newly created Asistente in storage.
     *
     * @param CreateAsistenteRequest $request
     *
     * @return Response
     */
    public function store(CreateAsistenteRequest $request)
    {
        $input = $request->all();

        $asistente = $this->asistenteRepository->create($input);

        Flash::success('Asistente saved successfully.');

        return redirect(route('asistentes.index'));
    }

    /**
     * Display the specified Asistente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asistente = $this->asistenteRepository->findWithoutFail($id);

        if (empty($asistente)) {
            Flash::error('Asistente not found');

            return redirect(route('asistentes.index'));
        }

        return view('asistentes.show')->with('asistente', $asistente);
    }

    /**
     * Show the form for editing the specified Asistente.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asistente = $this->asistenteRepository->findWithoutFail($id);
        $ponencias = Ponencia::pluck('nombre', 'id');

        if (empty($asistente)) {
            Flash::error('Asistente not found');

            return redirect(route('asistentes.index'));
        }

        return view('asistentes.edit', compact('asistente', 'ponencias'));
    }

    /**
     * Update the specified Asistente in storage.
     *
     * @param  int              $id
     * @param UpdateAsistenteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsistenteRequest $request)
    {
        $asistente = $this->asistenteRepository->findWithoutFail($id);

        if (empty($asistente)) {
            Flash::error('Asistente not found');

            return redirect(route('asistentes.index'));
        }

        $asistente = $this->asistenteRepository->update($request->all(), $id);

        Flash::success('Asistente updated successfully.');

        return redirect(route('asistentes.index'));
    }

    /**
     * Remove the specified Asistente from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asistente = $this->asistenteRepository->findWithoutFail($id);

        if (empty($asistente)) {
            Flash::error('Asistente not found');

            return redirect(route('asistentes.index'));
        }

        $this->asistenteRepository->delete($id);

        Flash::success('Asistente deleted successfully.');

        return redirect(route('asistentes.index'));
    }
}
