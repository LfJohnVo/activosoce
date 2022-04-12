<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVerificacionRequest;
use App\Http\Requests\UpdateVerificacionRequest;
use App\Repositories\VerificacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VerificacionController extends AppBaseController
{
    /** @var  VerificacionRepository */
    private $verificacionRepository;

    public function __construct(VerificacionRepository $verificacionRepo)
    {
        $this->verificacionRepository = $verificacionRepo;
    }

    /**
     * Display a listing of the Verificacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $verificacions = $this->verificacionRepository->all();

        return view('verificacions.index')
            ->with('verificacions', $verificacions);
    }

    /**
     * Show the form for creating a new Verificacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('verificacions.create');
    }

    /**
     * Store a newly created Verificacion in storage.
     *
     * @param CreateVerificacionRequest $request
     *
     * @return Response
     */
    public function store(CreateVerificacionRequest $request)
    {
        $input = $request->all();

        $verificacion = $this->verificacionRepository->create($input);

        Flash::success('Verificación añadida.');

        return redirect(route('verificacions.index'));
    }

    /**
     * Display the specified Verificacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $verificacion = $this->verificacionRepository->find($id);

        if (empty($verificacion)) {
            Flash::error('Verificacion not found');

            return redirect(route('verificacions.index'));
        }

        return view('verificacions.show')->with('verificacion', $verificacion);
    }

    /**
     * Show the form for editing the specified Verificacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $verificacion = $this->verificacionRepository->find($id);

        if (empty($verificacion)) {
            Flash::error('Verificacion not found');

            return redirect(route('verificacions.index'));
        }

        return view('verificacions.edit')->with('verificacion', $verificacion);
    }

    /**
     * Update the specified Verificacion in storage.
     *
     * @param int $id
     * @param UpdateVerificacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVerificacionRequest $request)
    {
        $verificacion = $this->verificacionRepository->find($id);

        if (empty($verificacion)) {
            Flash::error('Verificacion not found');

            return redirect(route('verificacions.index'));
        }

        $verificacion = $this->verificacionRepository->update($request->all(), $id);

        Flash::success('Verificación actualizada.');

        return redirect(route('verificacions.index'));
    }

    /**
     * Remove the specified Verificacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $verificacion = $this->verificacionRepository->find($id);

        if (empty($verificacion)) {
            Flash::error('Verificacion not found');

            return redirect(route('verificacions.index'));
        }

        $this->verificacionRepository->delete($id);

        Flash::success('Verificación eliminada.');

        return redirect(route('verificacions.index'));
    }
}
