  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://unpkg.com/vue-select@latest"></script> --}}
  {{-- <script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script> --}}







<script type="text/javascript">

   var app = new Vue({
    el: '#app',    
    data:{

      nombre:'',
      email:'',
      mensaje:'',
      mensaje_enaviado:false,
      mensaje_luego_de_envio:'',
      windowWidth: window.innerWidth,
    },
    methods:{

    enviar_contacto: function(){
      var url = 'envio_post_contacto';

      var data = {  nombre:this.nombre,
                     email:this.email, 
                   mensaje:this.mensaje         
                 }; 




     axios.post(url,data).then(function (response){           


            var data = response.data;  

            console.log(data);

            if(data.Validacion == true)
            {
              app.mensaje_enaviado = true;
              app.mensaje_luego_de_envio = 'Consulta enviada correctamente, en breve te responderemos a '+ app.email;

              //facebook event
              /*fbq('track', 'CompleteRegistration');*/
            }
            else
            {
              app.mensaje_luego_de_envio = 'Algo no está bien, verifica los datos e intenta nuevamente';
            }
           
           }).catch(function (error){

                     
            
           });
    }
    },
    watch: {
    windowHeight(newHeight, oldHeight) {
     /*this.txt = `it changed to ${newHeight} from ${oldHeight}`;*/
    }
    },  

    mounted(){
      this.$nextTick(() => {
        window.addEventListener('resize', () => {
          this.windowWidth = window.innerWidth
        });
      })
    },


    

   });


</script>

 
