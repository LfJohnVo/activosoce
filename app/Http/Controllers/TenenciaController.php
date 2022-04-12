<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTenenciaRequest;
use App\Http\Requests\UpdateTenenciaRequest;
use App\Repositories\TenenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TenenciaController extends AppBaseController
{
    /** @var  TenenciaRepository */
    private $tenenciaRepository;

    public function __construct(TenenciaRepository $tenenciaRepo)
    {
        $this->tenenciaRepository = $tenenciaRepo;
    }

    /**
     * Display a listing of the Tenencia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tenencias = $this->tenenciaRepository->all();

        return view('tenencias.index')
            ->with('tenencias', $tenencias);
    }

    /**
     * Show the form for creating a new Tenencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('tenencias.create');
    }

    /**
     * Store a newly created Tenencia in storage.
     *
     * @param CreateTenenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateTenenciaRequest $request)
    {
        $input = $request->all();

        $tenencia = $this->tenenciaRepository->create($input);

        Flash::success('Tenencia añadida.');

        return redirect(route('tenencias.index'));
    }

    /**
     * Display the specified Tenencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tenencia = $this->tenenciaRepository->find($id);

        if (empty($tenencia)) {
            Flash::error('Tenencia not found');

            return redirect(route('tenencias.index'));
        }

        return view('tenencias.show')->with('tenencia', $tenencia);
    }

    /**
     * Show the form for editing the specified Tenencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tenencia = $this->tenenciaRepository->find($id);

        if (empty($tenencia)) {
            Flash::error('Tenencia not found');

            return redirect(route('tenencias.index'));
        }

        return view('tenencias.edit')->with('tenencia', $tenencia);
    }

    /**
     * Update the specified Tenencia in storage.
     *
     * @param int $id
     * @param UpdateTenenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTenenciaRequest $request)
    {
        $tenencia = $this->tenenciaRepository->find($id);

        if (empty($tenencia)) {
            Flash::error('Tenencia not found');

            return redirect(route('tenencias.index'));
        }

        $tenencia = $this->tenenciaRepository->update($request->all(), $id);

        Flash::success('Tenencia actualizada.');

        return redirect(route('tenencias.index'));
    }

    /**
     * Remove the specified Tenencia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tenencia = $this->tenenciaRepository->find($id);

        if (empty($tenencia)) {
            Flash::error('Tenencia not found');

            return redirect(route('tenencias.index'));
        }

        $this->tenenciaRepository->delete($id);

        Flash::success('Tenencia eliminada.');

        return redirect(route('tenencias.index'));
    }
}
