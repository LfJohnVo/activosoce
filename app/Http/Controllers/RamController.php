<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRamRequest;
use App\Http\Requests\UpdateRamRequest;
use App\Repositories\RamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RamController extends AppBaseController
{
    /** @var  RamRepository */
    private $ramRepository;

    public function __construct(RamRepository $ramRepo)
    {
        $this->ramRepository = $ramRepo;
    }

    /**
     * Display a listing of the Ram.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rams = $this->ramRepository->all();

        return view('rams.index')
            ->with('rams', $rams);
    }

    /**
     * Show the form for creating a new Ram.
     *
     * @return Response
     */
    public function create()
    {
        return view('rams.create');
    }

    /**
     * Store a newly created Ram in storage.
     *
     * @param CreateRamRequest $request
     *
     * @return Response
     */
    public function store(CreateRamRequest $request)
    {
        $input = $request->all();

        $ram = $this->ramRepository->create($input);

        Flash::success('Ram saved successfully.');

        return redirect(route('rams.index'));
    }

    /**
     * Display the specified Ram.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ram = $this->ramRepository->find($id);

        if (empty($ram)) {
            Flash::error('Ram not found');

            return redirect(route('rams.index'));
        }

        return view('rams.show')->with('ram', $ram);
    }

    /**
     * Show the form for editing the specified Ram.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ram = $this->ramRepository->find($id);

        if (empty($ram)) {
            Flash::error('Ram not found');

            return redirect(route('rams.index'));
        }

        return view('rams.edit')->with('ram', $ram);
    }

    /**
     * Update the specified Ram in storage.
     *
     * @param int $id
     * @param UpdateRamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRamRequest $request)
    {
        $ram = $this->ramRepository->find($id);

        if (empty($ram)) {
            Flash::error('Ram not found');

            return redirect(route('rams.index'));
        }

        $ram = $this->ramRepository->update($request->all(), $id);

        Flash::success('Ram updated successfully.');

        return redirect(route('rams.index'));
    }

    /**
     * Remove the specified Ram from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ram = $this->ramRepository->find($id);

        if (empty($ram)) {
            Flash::error('Ram not found');

            return redirect(route('rams.index'));
        }

        $this->ramRepository->delete($id);

        Flash::success('Ram deleted successfully.');

        return redirect(route('rams.index'));
    }
}
