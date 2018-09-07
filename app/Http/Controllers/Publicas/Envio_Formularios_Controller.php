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

            $Name    = $Request->get('nombre');
            $Email   = $Request->get('email');
            $Mensaje = $Request->get('mensaje');

            $manajer     = new envio_contacto_manager(null, $Request->all());
            $Validacion  = false;

            if($manajer->isValid())
            {
                $this->EmailsRepo->EnvioEmailDeContacto($Name, $Email, $Mensaje, 'contacto@uruwild.com', 'Uruwild')
              
                $Validacion  = true;
            }

            
            $array = [ 
                   'Validacion' => $Validacion                  
                     ];

            return json_encode($array);
        
    }

    

   


}
