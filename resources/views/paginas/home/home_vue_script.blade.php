  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  <script src="https://unpkg.com/vue-select@latest"></script>
  <script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>







<script type="text/javascript">

   var app = new Vue({
    el: '#contact',    
    data:{

      nombre:'',
      email:'',
      mensaje:'',
      mensaje_enaviado:false,
    },
    methods:{},

    enviar_contacto: function(){
      var url = 'post_contacto_form';

      var data = {  nombre:this.nombre,
                     email:this.email, 
                   mensaje:this.mensaje,          
                 }; 

     axios.post(url,data).then(function (response){

       
            var data = response.data;  


            if(data.Validacion == true)
            {

            }
            else
            {

            }
           
     })
          .catch(function (error) {

            app.alerta('Upsss algo salió mal: '+ error,'danger');            
            
          });
    }

   });


</script>

 
