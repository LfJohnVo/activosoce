<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Arrendadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ArrendadoraRepository;
use App\Http\Requests\CreateArrendadoraRequest;
use App\Http\Requests\UpdateArrendadoraRequest;

class ArrendadoraController extends AppBaseController
{
    /** @var  ArrendadoraRepository */
    private $arrendadoraRepository;

    public function __construct(ArrendadoraRepository $arrendadoraRepo)
    {
        $this->arrendadoraRepository = $arrendadoraRepo;
    }

    /**
     * Display a listing of the Arrendadora.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$arrendadoras = Arrendadora::get();
        $arrendadoras = DB::table('arrendadoras')->get();

        return view('arrendadoras.index')
            ->with('arrendadoras', $arrendadoras);
    }

    /**
     * Show the form for creating a new Arrendadora.
     *
     * @return Response
     */
    public function create()
    {
        return view('arrendadoras.create');
    }

    /**
     * Store a newly created Arrendadora in storage.
     *
     * @param CreateArrendadoraRequest $request
     *
     * @return Response
     */
    public function store(CreateArrendadoraRequest $request)
    {
        $input = $request->all();

        $arrendadora = $this->arrendadoraRepository->create($input);

        Flash::success('Arrendadora añadida.');

        return redirect(route('arrendadoras.index'));
    }

    /**
     * Display the specified Arrendadora.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $arrendadora = $this->arrendadoraRepository->find($id);

        if (empty($arrendadora)) {
            Flash::error('Arrendadora not found');

            return redirect(route('arrendadoras.index'));
        }

        return view('arrendadoras.show')->with('arrendadora', $arrendadora);
    }

    /**
     * Show the form for editing the specified Arrendadora.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $arrendadora = $this->arrendadoraRepository->find($id);

        if (empty($arrendadora)) {
            Flash::error('Arrendadora not found');

            return redirect(route('arrendadoras.index'));
        }

        return view('arrendadoras.edit')->with('arrendadora', $arrendadora);
    }

    /**
     * Update the specified Arrendadora in storage.
     *
     * @param int $id
     * @param UpdateArrendadoraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArrendadoraRequest $request)
    {
        $arrendadora = $this->arrendadoraRepository->find($id);

        if (empty($arrendadora)) {
            Flash::error('Arrendadora not found');

            return redirect(route('arrendadoras.index'));
        }

        $arrendadora = $this->arrendadoraRepository->update($request->all(), $id);

        Flash::success('Arrendadora actualizada.');

        return redirect(route('arrendadoras.index'));
    }

    /**
     * Remove the specified Arrendadora from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $arrendadora = $this->arrendadoraRepository->find($id);

        if (empty($arrendadora)) {
            Flash::error('Arrendadora not found');

            return redirect(route('arrendadoras.index'));
        }

        $this->arrendadoraRepository->delete($id);

        Flash::success('Arrendadora eliminada.');

        return redirect(route('arrendadoras.index'));
    }
}
