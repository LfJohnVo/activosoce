<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiscoDuroRequest;
use App\Http\Requests\UpdateDiscoDuroRequest;
use App\Repositories\DiscoDuroRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DiscoDuroController extends AppBaseController
{
    /** @var  DiscoDuroRepository */
    private $discoDuroRepository;

    public function __construct(DiscoDuroRepository $discoDuroRepo)
    {
        $this->discoDuroRepository = $discoDuroRepo;
    }

    /**
     * Display a listing of the DiscoDuro.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $discoDuros = $this->discoDuroRepository->all();

        return view('disco_duros.index')
            ->with('discoDuros', $discoDuros);
    }

    /**
     * Show the form for creating a new DiscoDuro.
     *
     * @return Response
     */
    public function create()
    {
        return view('disco_duros.create');
    }

    /**
     * Store a newly created DiscoDuro in storage.
     *
     * @param CreateDiscoDuroRequest $request
     *
     * @return Response
     */
    public function store(CreateDiscoDuroRequest $request)
    {
        $input = $request->all();

        $discoDuro = $this->discoDuroRepository->create($input);

        Flash::success('Disco Duro saved successfully.');

        return redirect(route('discoDuros.index'));
    }

    /**
     * Display the specified DiscoDuro.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $discoDuro = $this->discoDuroRepository->find($id);

        if (empty($discoDuro)) {
            Flash::error('Disco Duro not found');

            return redirect(route('discoDuros.index'));
        }

        return view('disco_duros.show')->with('discoDuro', $discoDuro);
    }

    /**
     * Show the form for editing the specified DiscoDuro.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $discoDuro = $this->discoDuroRepository->find($id);

        if (empty($discoDuro)) {
            Flash::error('Disco Duro not found');

            return redirect(route('discoDuros.index'));
        }

        return view('disco_duros.edit')->with('discoDuro', $discoDuro);
    }

    /**
     * Update the specified DiscoDuro in storage.
     *
     * @param int $id
     * @param UpdateDiscoDuroRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiscoDuroRequest $request)
    {
        $discoDuro = $this->discoDuroRepository->find($id);

        if (empty($discoDuro)) {
            Flash::error('Disco Duro not found');

            return redirect(route('discoDuros.index'));
        }

        $discoDuro = $this->discoDuroRepository->update($request->all(), $id);

        Flash::success('Disco Duro updated successfully.');

        return redirect(route('discoDuros.index'));
    }

    /**
     * Remove the specified DiscoDuro from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $discoDuro = $this->discoDuroRepository->find($id);

        if (empty($discoDuro)) {
            Flash::error('Disco Duro not found');

            return redirect(route('discoDuros.index'));
        }

        $this->discoDuroRepository->delete($id);

        Flash::success('Disco Duro deleted successfully.');

        return redirect(route('discoDuros.index'));
    }
}
