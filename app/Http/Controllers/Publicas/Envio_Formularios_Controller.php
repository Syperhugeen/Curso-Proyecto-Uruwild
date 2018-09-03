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
        $entidad = '';
        $manager = new envio_contacto_manager($entidad,$Request->all());


        return 'hola';

        if($Request->ajax())
        {

            if($manager->isValid())
            {
              //logica para envio de correo electronico
              
              $Validacion  = true;
            }
            else
            {              
              $Validacion  = false;
            }

            return response()->json(
                 [ 
                   'Validacion' => $Validacion                  
                 ]
            ); 
            
        }

        if ( ($manager->isValid() ) && (!$Request->ajax()) )
        {
         return 'que pasa aca'   ;   
        }  


        
        
        
    }

    

   


}
