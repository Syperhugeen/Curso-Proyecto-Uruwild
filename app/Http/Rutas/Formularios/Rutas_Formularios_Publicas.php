<?php 



//Post Form Contacto
Route::post('envio_post_contacto',
[
  'uses'  => 'Publicas\Envio_Formularios_Controller@post_contacto_form',
  'as'    => 'post_contacto_form'
]);


