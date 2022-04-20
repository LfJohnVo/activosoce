<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Auto;
use App\Models\Taller;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MantenimientoAutoRepository;
use App\Http\Requests\CreateMantenimientoAutoRequest;
use App\Http\Requests\UpdateMantenimientoAutoRequest;

class MantenimientoAutoController extends AppBaseController
{
    /** @var  MantenimientoAutoRepository */
    private $mantenimientoAutoRepository;

    public function __construct(MantenimientoAutoRepository $mantenimientoAutoRepo)
    {
        $this->mantenimientoAutoRepository = $mantenimientoAutoRepo;
    }

    /**
     * Display a listing of the MantenimientoAuto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mantenimientoAutos = $this->mantenimientoAutoRepository->all();

        return view('mantenimiento_autos.index')
            ->with('mantenimientoAutos', $mantenimientoAutos);
    }

    /**
     * Show the form for creating a new MantenimientoAuto.
     *
     * @return Response
     */
    public function create()
    {
        $autos = Auto::get();
        $talleres = Taller::get();

        return view('mantenimiento_autos.create', compact('autos', 'talleres'));
    }

    /**
     * Store a newly created MantenimientoAuto in storage.
     *
     * @param CreateMantenimientoAutoRequest $request
     *
     * @return Response
     */
    public function store(CreateMantenimientoAutoRequest $request)
    {
        $input = $request->all();

        $mantenimientoAuto = $this->mantenimientoAutoRepository->create($input);

        Flash::success('Mantenimiento añadido.');

        return redirect(route('mantenimientoAutos.index'));
    }

    /**
     * Display the specified MantenimientoAuto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mantenimientoAuto = $this->mantenimientoAutoRepository->find($id);

        if (empty($mantenimientoAuto)) {
            Flash::error('Mantenimiento Auto not found');

            return redirect(route('mantenimientoAutos.index'));
        }

        return view('mantenimiento_autos.show')->with('mantenimientoAuto', $mantenimientoAuto);
    }

    /**
     * Show the form for editing the specified MantenimientoAuto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mantenimientoAuto = $this->mantenimientoAutoRepository->find($id);

        if (empty($mantenimientoAuto)) {
            Flash::error('Mantenimiento Auto not found');

            return redirect(route('mantenimientoAutos.index'));
        }

        $autos = Auto::get();
        $talleres = Taller::get();

        return view('mantenimiento_autos.edit', compact('autos', 'talleres'))->with('mantenimientoAuto', $mantenimientoAuto);
    }

    /**
     * Update the specified MantenimientoAuto in storage.
     *
     * @param int $id
     * @param UpdateMantenimientoAutoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMantenimientoAutoRequest $request)
    {
        $mantenimientoAuto = $this->mantenimientoAutoRepository->find($id);

        if (empty($mantenimientoAuto)) {
            Flash::error('Mantenimiento Auto not found');

            return redirect(route('mantenimientoAutos.index'));
        }

        $mantenimientoAuto = $this->mantenimientoAutoRepository->update($request->all(), $id);

        Flash::success('Mantenimiento actualizado.');

        return redirect(route('mantenimientoAutos.index'));
    }

    /**
     * Remove the specified MantenimientoAuto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mantenimientoAuto = $this->mantenimientoAutoRepository->find($id);

        if (empty($mantenimientoAuto)) {
            Flash::error('Mantenimiento Auto not found');

            return redirect(route('mantenimientoAutos.index'));
        }

        $this->mantenimientoAutoRepository->delete($id);

        Flash::success('Mantenimiento eliminado.');

        return redirect(route('mantenimientoAutos.index'));
    }
}
