<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Auto;
use App\Models\Empleado;
use App\Models\TipoEquipo;
use App\Models\MarcaEquipo;
use App\Models\ModeloEquipo;
use Illuminate\Http\Request;
use Image;
use App\Repositories\AutoRepository;
use App\Http\Requests\CreateAutoRequest;
use App\Http\Requests\UpdateAutoRequest;
use App\Http\Controllers\AppBaseController;

class AutoController extends AppBaseController
{
    /** @var  AutoRepository */
    private $autoRepository;

    public function __construct(AutoRepository $autoRepo)
    {
        $this->autoRepository = $autoRepo;
    }

    /**
     * Display a listing of the Auto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $autos = $this->autoRepository->all();

        return view('autos.index')
            ->with('autos', $autos);
    }

    /**
     * Show the form for creating a new Auto.
     *
     * @return Response
     */
    public function create()
    {
        $tipos = TipoEquipo::find(1);
        $marcas = MarcaEquipo::where('id_tipoEquipo', '=', 1)->get();
        $modelos = ModeloEquipo::get();
        $empleados = Empleado::get();

        return view('autos.create', compact('tipos', 'marcas', 'modelos', 'empleados'));
    }

    /**
     * Store a newly created Auto in storage.
     *
     * @param CreateAutoRequest $request
     *
     * @return Response
     */
    public function store(CreateAutoRequest $request)
    {
        $input = $request->all();

        $foto = '';
        $foto = request()->file('foto');
        if ($foto != null) {
            $datacont = $foto->get();
            $nombre_contrato = $foto->getBasename();
            $cont = file_get_contents($foto);
            $contdata = base64_encode($cont);
            $input['foto'] = $contdata;
            //$contrato = $this->pensionRepository->create($input);
        }

        $auto = $this->autoRepository->create($input);

        Flash::success('Auto registrado.');

        return redirect(route('autos.index'));
    }

    /**
     * Display the specified Auto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $auto = $this->autoRepository->find($id);

        if (empty($auto)) {
            Flash::error('Auto not found');

            return redirect(route('autos.index'));
        }

        return view('autos.show')->with('auto', $auto);
    }

    /**
     * Show the form for editing the specified Auto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $auto = Auto::find($id);

        if (empty($auto)) {
            Flash::error('Auto not found');

            return redirect(route('autos.index'));
        }

        $tipos = TipoEquipo::find(1);
        $marcas = MarcaEquipo::where('id_tipoEquipo', '=', 1)->get();
        $modelos = ModeloEquipo::get();
        $empleados = Empleado::get();

        return view('autos.edit', compact('tipos', 'marcas', 'modelos', 'empleados'))->with('auto', $auto);
    }

    /**
     * Update the specified Auto in storage.
     *
     * @param int $id
     * @param UpdateAutoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAutoRequest $request)
    {
        $auto = Auto::find($id);
        $file = $request->file('foto');

        if (empty($auto)) {
            Flash::error('Auto not found');

            return redirect(route('autos.index'));
        }

        $auto = $this->autoRepository->update($request->all(), $id);

        if ($file == null) {
            $up = $auto
                ->update(['foto' => null]);
        } else {
            $image = base64_encode(file_get_contents($request->file('foto')));
            $up = $auto
                ->update(['foto' => $image]);
        }


        Flash::success('Auto actualizado.');

        return redirect(route('autos.index'));
    }

    /**
     * Remove the specified Auto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $auto = $this->autoRepository->find($id);

        if (empty($auto)) {
            Flash::error('Auto not found');

            return redirect(route('autos.index'));
        }

        $this->autoRepository->delete($id);

        Flash::success('Auto eliminado.');

        return redirect(route('autos.index'));
    }

    public function downloadFoto($id)
    {
        $pdf = Auto::find($id);
        $bin = base64_decode($pdf->foto);

        $path = "xml_down/" . $id . ".png";
        //dd($path);
        // Obtain the original content (usually binary data)
        // Load GD resource from binary data
        //$im = imageCreateFromString($bin);
        //$data = file_get_contents($path);
        //file_put_contents($path, file_get_contents($bin));
        //$imageName = str_random(10).'.'.'png';

        // Make sure that the GD library was able to load the image
        // This is important, because you should not miss corrupted or unsupported images
        /*if (!$im) {
            die('Base64 value is not a valid image');
        }*/

        file_put_contents($path, $bin);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        flush(); // Flush system output buffer
        readfile($path);
        unlink($path);
    }
}
