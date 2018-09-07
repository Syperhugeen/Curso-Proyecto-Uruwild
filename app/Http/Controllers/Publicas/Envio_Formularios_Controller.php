<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\Emails\EmailsRepo;
use App\Repositorios\Emails\EmailsEspecificosDePaginasRepo;;
use App\Managers\envio_contacto_manager;



class Envio_Formularios_Controller extends Controller
{
  
    protected $EmpresaRepo;
    protected $EmailsRepo;
    protected $EmailsEspecificosDePaginasRepo;
   

    public function __construct(EmpresaRepo                    $EmpresaRepo,
                                EmailsRepo                     $EmailsRepo,
                                EmailsEspecificosDePaginasRepo $EmailsEspecificosDePaginasRepo)
    {
        
        $this->EmpresaRepo                    = $EmpresaRepo;
        $this->EmailsRepo                     = $EmailsRepo;
        $this->EmailsEspecificosDePaginasRepo = $EmailsEspecificosDePaginasRepo;
    }

    public function post_contacto_form(Request $Request)
    {

            $name    = $Request->get('nombre');
            $email   = $Request->get('email');
            $mensaje = $Request->get('mensaje');

            $Validacion  = false;

            dd(filter_var($email, FILTER_VALIDATE_EMAIL));

            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $Validacion  = true;
            }
            

            

            if($Validacion == true)
            {
                $this->EmailsRepo->EnvioEmailDeContacto($name, $email, $mensaje, 'contacto@uruwild.com', 'Uruwild');
                
            }

            
            $array = [ 
                   'Validacion' => $Validacion                  
                     ];

            return json_encode($array);
        
    }

    

   


}
