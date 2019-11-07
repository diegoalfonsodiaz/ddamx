<?php

namespace App\Http\Controllers;

use DB;
use App\Denuncia;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class EstadoDenunciaExternaController extends Controller
{
    //
    public function solicitartelefono(request $request, SessionManager $sessionManager)
    {
        $this->Validate($request, [
            'telefono' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
           
        ]);

        
            $denuncia =DB::table('denuncias')
            ->join('ticket_denuncias','denuncias.id','=','ticket_denuncias.denuncia_id')
            ->where('denuncias.telefono','=', $request->telefono)
            ->select('denuncias.id','denuncias.descripcion','denuncias.fecha','denuncias.foto','denuncias.direccion','ticket_denuncias.detalle as estadodeladenuncia','ticket_denuncias.updated_at as estadoactualizado')
            ->orderBy('ticket_denuncias.updated_at', 'desc')
            ->limit(1)
            ->get();


            return view('front.denuncia.estadodenuncia', ["denuncia"=>$denuncia])->with('i');
            
    }
}
