<?php

namespace App\Http\Controllers\Email;
use App\Models\Login\Usuario;
use App\Http\Controllers\Controller;
use App\Services\Email\sendService;
use Illuminate\Http\Request; 
use App\Models\Email\ResetPassword;

class EmailController extends Controller
{
    protected $sendService;

    public function __construct(sendService $sendService){
        $this->sendService = $sendService;
    }



    public function index(){
        return view('Email.email');
    }

    // Recebe dos Request Usuario e Email para validar e chamar o Service para enviar dados
    public function store(Request $request){
        // Recebe da View
        $LOGIN = $request->input('usuario');
        $EMAIL = $request->input('email');

        $data = $request->all();
        // Aqui falta inserir os dados para o token


        // Valida Login e Email, para ver se existem
        $ValidaLogin = Usuario::where('LOGIN', $LOGIN)->exists();
        $ValidaEmail = Usuario::where('EMAIL', $EMAIL)->exists();

        // Se ValidarLogin ou ValidarEmail, não existirem ele avisa
        if(!$ValidaLogin) {
            return redirect()->
                back()->
                withInput()->with('loginError','Login incorreto');
        } else if (!$ValidaEmail) {
            return redirect()->
                back()->
                withInput()->with('loginError','Email invalido, favor inserir novamente');
        } else {
            // Senão, ele envia com o SendService.
            $tempo_limite = 6;
            session_start();
            $_SESSION['acesso_autorizado'] = time();
            $_SESSION['time'] = $tempo_limite;
            $this->sendService->EnviarEmail($LOGIN, $EMAIL);


        }
    }

}
