<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateempleadosAPIRequest;
use App\Http\Requests\API\UpdateempleadosAPIRequest;
use App\Models\empleados;
use App\Repositories\EmpleadoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\empleadosResource;
use Response;

/**
 * Class empleadosController
 * @package App\Http\Controllers\API
 */

class empleadosAPIController extends AppBaseController
{
    private $empleadoRepository;

    public function __construct(EmpleadoRepository $empleadoRepo)
    {
        $this->empleadoRepository = $empleadoRepo;
    }

    /**
     * Display a listing of the empleados.
     * GET|HEAD /empleados
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $empleados = $this->empleadoRepository->all();

        return $this->sendResponse(empleadosResource::collection($empleados), 'Empleados retrieved successfully');
    }

    /**
     * Store a newly created empleados in storage.
     * POST /empleados
     *
     * @param CreateempleadosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateempleadosAPIRequest $request)
    {
        $input = $request->all();

        $empleados = $this->empleadoRepository->create($input);

        return $this->sendResponse(new empleadosResource($empleados), 'Empleados saved successfully');
    }

    /**
     * Display the specified empleados.
     * GET|HEAD /empleados/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var empleados $empleados */
        $empleados = $this->empleadoRepository->find($id);

        if (empty($empleados)) {
            return $this->sendError('Empleados not found');
        }

        return $this->sendResponse(new empleadosResource($empleados), 'Empleados retrieved successfully');
    }

    /**
     * Update the specified empleados in storage.
     * PUT/PATCH /empleados/{id}
     *
     * @param int $id
     * @param UpdateempleadosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateempleadosAPIRequest $request)
    {
        $input = $request->all();

        /** @var empleados $empleados */
        $empleados = $this->empleadoRepository->find($id);

        if (empty($empleados)) {
            return $this->sendError('Empleados not found');
        }

        $empleados = $this->empleadoRepository->update($input, $id);

        return $this->sendResponse(new empleadosResource($empleados), 'empleados updated successfully');
    }

    /**
     * Remove the specified empleados from storage.
     * DELETE /empleados/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var empleados $empleados */
        $empleados = $this->empleadoRepository->find($id);

        if (empty($empleados)) {
            return $this->sendError('Empleados not found');
        }

        $empleados->delete();

        return $this->sendSuccess('Empleados deleted successfully');
    }
}
