  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://unpkg.com/vue-select@latest"></script> --}}
  {{-- <script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script> --}}







<script type="text/javascript">

   var app = new Vue({
    el: '#contact',    
    data:{

      nombre:'',
      email:'',
      mensaje:'',
      mensaje_enaviado:false,
      mensaje_luego_de_envio:'',
    },
    methods:{

    enviar_contacto: function(){
      var url = '/post_contacto_form';

      var data = {  nombre:this.nombre,
                     email:this.email, 
                   mensaje:this.mensaje,          
                 }; 

     axios.post(url,data).then(function (response){

       
            var data = response.data;  


            if(data.Validacion == true)
            {
              $this.mensaje_enaviado = true;
              $this.mensaje_luego_de_envio = 'Consulta enviado correctamente, en breve te responderemos a '+ $this.email;
            }
            else
            {
               $this.mensaje_luego_de_envio = 'Algo no está bien, verifica los datos e intenta nuevamente';
            }
           
     })
          .catch(function (error) {

                     
            
          });
    }
    },

   });


</script>

 
