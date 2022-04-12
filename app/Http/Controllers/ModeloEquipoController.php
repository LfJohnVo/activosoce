<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\MarcaEquipo;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ModeloEquipoRepository;
use App\Http\Requests\CreateModeloEquipoRequest;
use App\Http\Requests\UpdateModeloEquipoRequest;

class ModeloEquipoController extends AppBaseController
{
    /** @var  ModeloEquipoRepository */
    private $modeloEquipoRepository;

    public function __construct(ModeloEquipoRepository $modeloEquipoRepo)
    {
        $this->modeloEquipoRepository = $modeloEquipoRepo;
    }

    /**
     * Display a listing of the ModeloEquipo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $modeloEquipos = $this->modeloEquipoRepository->all();

        return view('modelo_equipos.index')
            ->with('modeloEquipos', $modeloEquipos);
    }

    /**
     * Show the form for creating a new ModeloEquipo.
     *
     * @return Response
     */
    public function create()
    {
        $marcas = MarcaEquipo::get();

        return view('modelo_equipos.create', compact('marcas'));
    }

    /**
     * Store a newly created ModeloEquipo in storage.
     *
     * @param CreateModeloEquipoRequest $request
     *
     * @return Response
     */
    public function store(CreateModeloEquipoRequest $request)
    {
        $input = $request->all();

        $modeloEquipo = $this->modeloEquipoRepository->create($input);

        Flash::success('Modelo Equipo añadido.');

        return redirect(route('modeloEquipos.index'));
    }

    /**
     * Display the specified ModeloEquipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $modeloEquipo = $this->modeloEquipoRepository->find($id);

        if (empty($modeloEquipo)) {
            Flash::error('Modelo Equipo not found');

            return redirect(route('modeloEquipos.index'));
        }

        return view('modelo_equipos.show')->with('modeloEquipo', $modeloEquipo);
    }

    /**
     * Show the form for editing the specified ModeloEquipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $modeloEquipo = $this->modeloEquipoRepository->find($id);

        if (empty($modeloEquipo)) {
            Flash::error('Modelo Equipo not found');

            return redirect(route('modeloEquipos.index'));
        }

        $marcas = MarcaEquipo::get();


        return view('modelo_equipos.edit', compact('marcas'))->with('modeloEquipo', $modeloEquipo);
    }

    /**
     * Update the specified ModeloEquipo in storage.
     *
     * @param int $id
     * @param UpdateModeloEquipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateModeloEquipoRequest $request)
    {
        $modeloEquipo = $this->modeloEquipoRepository->find($id);

        if (empty($modeloEquipo)) {
            Flash::error('Modelo Equipo not found');

            return redirect(route('modeloEquipos.index'));
        }

        $modeloEquipo = $this->modeloEquipoRepository->update($request->all(), $id);

        Flash::success('Modelo Equipo actualizado.');

        return redirect(route('modeloEquipos.index'));
    }

    /**
     * Remove the specified ModeloEquipo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $modeloEquipo = $this->modeloEquipoRepository->find($id);

        if (empty($modeloEquipo)) {
            Flash::error('Modelo Equipo not found');

            return redirect(route('modeloEquipos.index'));
        }

        $this->modeloEquipoRepository->delete($id);

        Flash::success('Modelo Equipo eliminado.');

        return redirect(route('modeloEquipos.index'));
    }
}
