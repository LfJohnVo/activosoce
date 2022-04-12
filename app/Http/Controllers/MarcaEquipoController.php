<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\TipoEquipo;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MarcaEquipoRepository;
use App\Http\Requests\CreateMarcaEquipoRequest;
use App\Http\Requests\UpdateMarcaEquipoRequest;

class MarcaEquipoController extends AppBaseController
{
    /** @var  MarcaEquipoRepository */
    private $marcaEquipoRepository;

    public function __construct(MarcaEquipoRepository $marcaEquipoRepo)
    {
        $this->marcaEquipoRepository = $marcaEquipoRepo;
    }

    /**
     * Display a listing of the MarcaEquipo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $marcaEquipos = $this->marcaEquipoRepository->all();

        return view('marca_equipos.index')
            ->with('marcaEquipos', $marcaEquipos);
    }

    /**
     * Show the form for creating a new MarcaEquipo.
     *
     * @return Response
     */
    public function create()
    {
        $tipoequipos = TipoEquipo::get();

        return view('marca_equipos.create', compact('tipoequipos'));
    }

    /**
     * Store a newly created MarcaEquipo in storage.
     *
     * @param CreateMarcaEquipoRequest $request
     *
     * @return Response
     */
    public function store(CreateMarcaEquipoRequest $request)
    {
        $input = $request->all();

        $marcaEquipo = $this->marcaEquipoRepository->create($input);

        Flash::success('Marca Equipo añadido.');

        return redirect(route('marcaEquipos.index'));
    }

    /**
     * Display the specified MarcaEquipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $marcaEquipo = $this->marcaEquipoRepository->find($id);

        if (empty($marcaEquipo)) {
            Flash::error('Marca Equipo not found');

            return redirect(route('marcaEquipos.index'));
        }

        return view('marca_equipos.show')->with('marcaEquipo', $marcaEquipo);
    }

    /**
     * Show the form for editing the specified MarcaEquipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $marcaEquipo = $this->marcaEquipoRepository->find($id);

        if (empty($marcaEquipo)) {
            Flash::error('Marca Equipo not found');

            return redirect(route('marcaEquipos.index'));
        }

        $tipoequipos = TipoEquipo::get();

        return view('marca_equipos.edit', compact('tipoequipos'))->with('marcaEquipo', $marcaEquipo);
    }

    /**
     * Update the specified MarcaEquipo in storage.
     *
     * @param int $id
     * @param UpdateMarcaEquipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarcaEquipoRequest $request)
    {
        $marcaEquipo = $this->marcaEquipoRepository->find($id);

        if (empty($marcaEquipo)) {
            Flash::error('Marca Equipo not found');

            return redirect(route('marcaEquipos.index'));
        }

        $marcaEquipo = $this->marcaEquipoRepository->update($request->all(), $id);

        Flash::success('Marca Equipo actualizado.');

        return redirect(route('marcaEquipos.index'));
    }

    /**
     * Remove the specified MarcaEquipo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $marcaEquipo = $this->marcaEquipoRepository->find($id);

        if (empty($marcaEquipo)) {
            Flash::error('Marca Equipo not found');

            return redirect(route('marcaEquipos.index'));
        }

        $this->marcaEquipoRepository->delete($id);

        Flash::success('Marca Equipo eliminado.');

        return redirect(route('marcaEquipos.index'));
    }
}
