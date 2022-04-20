<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\ContratoRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateContratoRequest;
use App\Http\Requests\UpdateContratoRequest;
use App\Models\Arrendadora;

class ContratoController extends AppBaseController
{
    /** @var  ContratoRepository */
    private $contratoRepository;

    public function __construct(ContratoRepository $contratoRepo)
    {
        $this->contratoRepository = $contratoRepo;
    }

    /**
     * Display a listing of the Contrato.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $contratos = DB::table('contratos')->get();

        return view('contratos.index')
            ->with('contratos', $contratos);
    }

    /**
     * Show the form for creating a new Contrato.
     *
     * @return Response
     */
    public function create()
    {
        $arrendadoras = DB::table('arrendadoras')->select('id', 'nombre')->get();

        return view('contratos.create', compact('arrendadoras'));
    }

    /**
     * Store a newly created Contrato in storage.
     *
     * @param CreateContratoRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $contrato = $this->contratoRepository->create($input);

        Flash::success('Contrato añadido.');

        return redirect(route('contratos.index'));
    }

    /**
     * Display the specified Contrato.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contrato = $this->contratoRepository->find($id);

        if (empty($contrato)) {
            Flash::error('Contrato not found');

            return redirect(route('contratos.index'));
        }

        return view('contratos.show')->with('contrato', $contrato);
    }

    /**
     * Show the form for editing the specified Contrato.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contrato = DB::table('contratos')->where('id', '=', $id)->first();

        if (empty($contrato)) {
            Flash::error('Contrato not found');

            return redirect(route('contratos.index'));
        }

        $arrendadoras = DB::table('arrendadoras')->select('id', 'nombre')->get();

        return view('contratos.edit', compact('arrendadoras'))->with('contrato', $contrato);
    }

    /**
     * Update the specified Contrato in storage.
     *
     * @param int $id
     * @param UpdateContratoRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $contrato = DB::table('contratos')->find($id);

        if (empty($contrato)) {
            Flash::error('Contrato not found');

            return redirect(route('contratos.index'));
        }

        $contratos = DB::table('contratos')->where('id', $id)->update([
            'id' => 'id',
            'id_arrendadora' => 'id_arrendadora',
            'plazo' => 'plazo',
            'fecha_inicio' => 'fecha_inicio',
            'fecha_final' => 'fecha_final',
            'monto_inicial' => 'monto_inicial',
            'monto_mensualidad' => 'monto_mensualidad',
            'estatus' => 'estatus',

        ]);

        Flash::success('Contrato actualizada.');

        return redirect(route('contratos.index'));
    }

    /**
     * Remove the specified Contrato from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contrato = DB::table('contratos')->where('id', $id)->first();

        if (empty($contrato)) {
            Flash::error('Contrato not found');

            return redirect(route('contratos.index'));
        }

        $contrato = DB::table('contratos')->where('id', $id)->delete();

        Flash::success('Contrato eliminado.');

        return redirect(route('contratos.index'));
    }
}
