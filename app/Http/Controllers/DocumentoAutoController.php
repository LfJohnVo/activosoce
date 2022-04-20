<?php

namespace App\Http\Controllers;

use Flash;
use Response;
use App\Models\Auto;
use Illuminate\Http\Request;
use App\Models\DocumentoAuto;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DocumentoAutoRepository;
use App\Http\Requests\CreateDocumentoAutoRequest;
use App\Http\Requests\UpdateDocumentoAutoRequest;

class DocumentoAutoController extends AppBaseController
{
    /** @var  DocumentoAutoRepository */
    private $documentoAutoRepository;

    public function __construct(DocumentoAutoRepository $documentoAutoRepo)
    {
        $this->documentoAutoRepository = $documentoAutoRepo;
    }

    /**
     * Display a listing of the DocumentoAuto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $documentoAutos = $this->documentoAutoRepository->all();

        return view('documento_autos.index')
            ->with('documentoAutos', $documentoAutos);
    }

    /**
     * Show the form for creating a new DocumentoAuto.
     *
     * @return Response
     */
    public function create()
    {
        $autos = Auto::get();

        return view('documento_autos.create')->with('autos', $autos);
    }

    /**
     * Store a newly created DocumentoAuto in storage.
     *
     * @param CreateDocumentoAutoRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentoAutoRequest $request)
    {
        $input = request()->all();

        $tarjeton = '';
        $tarjeton = request()->file('tarjeton');
        if ($tarjeton != null) {
            $datatarj = $tarjeton->get();
            $nombre_tarjeton = $tarjeton->getBasename();
            $cont = file_get_contents($tarjeton);
            $contdata = base64_encode($cont);
            $input['tarjeton'] = $contdata;
            //$contrato = $this->pensionRepository->create($input);
        }

        $factura = '';
        $factura = request()->file('factura');
        if ($factura != null) {
            $datafact = $factura->get();
            $nombre_factura = $factura->getBasename();
            $contfact = file_get_contents($factura);
            $contdfa = base64_encode($contfact);
            $input['factura'] = $contdfa;
            //$contrato = $this->pensionRepository->create($input);
        }

        $responsivaEmpleado = '';
        $responsivaEmpleado = request()->file('responsivaEmpleado');
        if ($responsivaEmpleado != null) {
            $dataresp = $responsivaEmpleado->get();
            $nombre_responsivaEmpleado = $responsivaEmpleado->getBasename();
            $contresp = file_get_contents($responsivaEmpleado);
            $contdres = base64_encode($contresp);
            $input['responsivaEmpleado'] = $contdres;
            //$contrato = $this->pensionRepository->create($input);
        }

        $ultimaTenencia = '';
        $ultimaTenencia = request()->file('ultimaTenencia');
        if ($ultimaTenencia != null) {
            $datault = $ultimaTenencia->get();
            $nombre_ultimaTenencia = $ultimaTenencia->getBasename();
            $contrten = file_get_contents($ultimaTenencia);
            $contdten = base64_encode($contrten);
            $input['ultimaTenencia'] = $contdten;
            //$contrato = $this->pensionRepository->create($input);
        }

        $ultimaVerificacion = '';
        $ultimaVerificacion = request()->file('ultimaVerificacion');
        if ($ultimaVerificacion != null) {
            $datault = $ultimaVerificacion->get();
            $nombre_ultimaVerificacion = $ultimaVerificacion->getBasename();
            $contrult = file_get_contents($ultimaVerificacion);
            $contdult = base64_encode($contrult);
            $input['ultimaVerificacion'] = $contdult;
            //$contrato = $this->pensionRepository->create($input);
        }

        $documentoAuto = $this->documentoAutoRepository->create($input);

        Flash::success('Documento actualizados.');

        return redirect(route('documentoAutos.index'));
    }

    /**
     * Display the specified DocumentoAuto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentoAuto = $this->documentoAutoRepository->find($id);

        if (empty($documentoAuto)) {
            Flash::error('Documento Auto not found');

            return redirect(route('documentoAutos.index'));
        }

        return view('documento_autos.show')->with('documentoAuto', $documentoAuto);
    }

    /**
     * Show the form for editing the specified DocumentoAuto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentoAuto = $this->documentoAutoRepository->find($id);

        if (empty($documentoAuto)) {
            Flash::error('Documento Auto not found');

            return redirect(route('documentoAutos.index'));
        }

        $autos = Auto::get();

        return view('documento_autos.edit')->with('documentoAuto', $documentoAuto)->with('autos', $autos);
    }

    /**
     * Update the specified DocumentoAuto in storage.
     *
     * @param int $id
     * @param UpdateDocumentoAutoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocumentoAutoRequest $request)
    {
        $auto = DocumentoAuto::find($id);

        if (empty($documentoAuto)) {
            Flash::error('Documento Auto not found');

            return redirect(route('documentoAutos.index'));
        }

        $tarjeton = $request->file('tarjeton');
        $factura = $request->file('factura');
        $responsivaEmpleado = $request->file('responsivaEmpleado');
        $ultimaTenencia = $request->file('ultimaTenencia');
        $ultimaVerificacion = $request->file('ultimaVerificacion');

        $documentoAuto = $this->documentoAutoRepository->update($request->all(), $id);

        if ($tarjeton == null) {
            $up = $auto
                ->update(['tarjeton' => null]);
        } else {
            $imtarjeton = base64_encode(file_get_contents($request->file('tarjeton')));
            $up = $auto
                ->update(['tarjeton' => $imtarjeton]);
        }

        if ($factura == null) {
            $up = $auto
                ->update(['factura' => null]);
        } else {
            $imfactura = base64_encode(file_get_contents($request->file('factura')));
            $up = $auto
                ->update(['factura' => $imfactura]);
        }

        if ($responsivaEmpleado == null) {
            $up = $auto
                ->update(['responsivaEmpleado' => null]);
        } else {
            $imresponsivaEmpleado = base64_encode(file_get_contents($request->file('responsivaEmpleado')));
            $up = $auto
                ->update(['responsivaEmpleado' => $imresponsivaEmpleado]);
        }

        if ($ultimaTenencia == null) {
            $up = $auto
                ->update(['ultimaTenencia' => null]);
        } else {
            $imultimaTenencia = base64_encode(file_get_contents($request->file('ultimaTenencia')));
            $up = $auto
                ->update(['ultimaTenencia' => $imultimaTenencia]);
        }

        if ($ultimaVerificacion == null) {
            $up = $auto
                ->update(['ultimaVerificacion' => null]);
        } else {
            $imultimaVerificacion = base64_encode(file_get_contents($request->file('ultimaVerificacion')));
            $up = $auto
                ->update(['ultimaVerificacion' => $imultimaVerificacion]);
        }

        Flash::success('Documento actualizado.');

        return redirect(route('documentoAutos.index'));
    }

    /**
     * Remove the specified DocumentoAuto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentoAuto = $this->documentoAutoRepository->find($id);

        if (empty($documentoAuto)) {
            Flash::error('Documento Auto not found');

            return redirect(route('documentoAutos.index'));
        }

        $this->documentoAutoRepository->delete($id);

        Flash::success('Documento eliminado.');

        return redirect(route('documentoAutos.index'));
    }

    public function downloadTarjeton($id)
    {
        $pdf = DocumentoAuto::find($id);
        $archivo = $pdf->tarjeton;
        $notarjeta = $pdf->id . $pdf->idAuto;
        $decoded = base64_decode($archivo);
        $path = "xml_down/" . $notarjeta . ".pdf";
        file_put_contents($path, $decoded);
        header("Content-disposition: attachment; filename=tarjeton-$notarjeta.pdf");
        header("Content-type: application/pdf");
        readfile($path);
        unlink($path);
    }

    public function downloadfactura($id)
    {
        $pdf = DocumentoAuto::find($id);
        $archivo = $pdf->factura;
        $notarjeta = $pdf->id . $pdf->idAuto;
        $decoded = base64_decode($archivo);
        $path = "xml_down/" . $notarjeta . ".pdf";
        file_put_contents($path, $decoded);
        header("Content-disposition: attachment; filename=factura-$notarjeta.pdf");
        header("Content-type: application/pdf");
        readfile($path);
        unlink($path);
    }

    public function downloadresponsivaempleado($id)
    {
        $pdf = DocumentoAuto::find($id);
        $archivo = $pdf->responsivaEmpleado;
        $notarjeta = $pdf->id . $pdf->idAuto;
        $decoded = base64_decode($archivo);
        $path = "xml_down/" . $notarjeta . ".pdf";
        file_put_contents($path, $decoded);
        header("Content-disposition: attachment; filename=responsivaEmpleado-$notarjeta.pdf");
        header("Content-type: application/pdf");
        readfile($path);
        unlink($path);
    }

    public function downloadultimatenencia($id)
    {
        $pdf = DocumentoAuto::find($id);
        $archivo = $pdf->ultimaTenencia;
        $notarjeta = $pdf->id . $pdf->idAuto;
        $decoded = base64_decode($archivo);
        $path = "xml_down/" . $notarjeta . ".pdf";
        file_put_contents($path, $decoded);
        header("Content-disposition: attachment; filename=ultimaTenencia-$notarjeta.pdf");
        header("Content-type: application/pdf");
        readfile($path);
        unlink($path);
    }

    public function downloadultimaverificacion($id)
    {
        $pdf = DocumentoAuto::find($id);
        $archivo = $pdf->ultimaVerificacion;
        $notarjeta = $pdf->id . $pdf->idAuto;
        $decoded = base64_decode($archivo);
        $path = "xml_down/" . $notarjeta . ".pdf";
        file_put_contents($path, $decoded);
        header("Content-disposition: attachment; filename=ultimaVerificacion-$notarjeta.pdf");
        header("Content-type: application/pdf");
        readfile($path);
        unlink($path);
    }
}
