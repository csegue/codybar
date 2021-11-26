@extends('plantillas.plantilla')
@section('title', 'Contactanos')
@section('content')
            

<div class="container-fluid">

<!-- ******************************************************************************************************************* -->
<div class="font_staat">
<!-- MOD 1: -->
<div class="Mod1">
             <div class="row rowmod1 mr-0.5 ml-0.5">   <!-- d-block: los pone verticales -->
               <div class="col-xl-2 colmod11 text-center" >
                   <nav2>
                       <ul>
                           <p>Opciones</p>
                           <hr  style=size:2px color="grey" width="95%" />
                           <div class="boton3"> <a href="" style="color:white">Volver Inicio</a></div>
                           @error('name')   <p style="font-size: 0.8em; color:red;"><strong>{{$message}}</strong></p> @enderror
                           @error('correo') <p style="font-size: 0.8em; color:red;"><strong>{{$message}}</strong></p> @enderror
                           @error('mensaje')<p style="font-size: 0.8em; color:red;"><strong>{{$message}}</strong></p> @enderror
                       </ul>
                   </nav2>
               </div>
<!--............................................................................................................... -->
        <div class="col-xl-3 colmod15">
        
        <form action="{{route('contactanos.store')}}" method="POST">
            @csrf
            <label>Nombre:  <br><input type="text" name="name"><br></label><br>
            <label>Correo:  <br><input type="text" name="correo"><br></label><br>
            <label>Mensaje: <br><textarea rows="4" name="mensaje"></textarea><br></label><br>
            <button type="submit">Enviar Mensaje</button>

        </form>
            <!-- mensaje de envio del mail en ventana java -->
            @if (session('info'))
                <script>
                    alert("{{session('info')}}");
                </script>
            @endif
<!--............................................................................................................... -->        
        </div><!-- row -->
            <div class="col-xl-6 colmod2" >
               
                    <h1>Dejame un mensae y contactaremos</h1>   
                
                <img class="centrar" src="{{asset('img/contactar.png')}}" style="width: 728px height= 410px">
            </div>
        </div><!-- col -->
      </div><!--mod1 -->
<!--............................................................................................................... -->

<!-- ******************************************************************************************************************* -->
<!-- MOD 2: -->
         <div class="Mod2">
             <div class="row rowmod2">   
               <div class="col-xl-11 colmod2" >
               <br><br><br><br><br>
               <img class="centrar2" repeat="no repeat" src="" style="width: 1056px height= 540px">;
               </div>
<!--............................................................................................................... -->
               <div class="col-xl-1 colmod2" >

               </div>
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 3: -->
         <div class="Mod3">
             <div class="row rowmod3">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod3" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod3" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
<!-- ******************************************************************************************************************* -->
<!-- MOD 4: -->
         <div class="Mod4">
             <div class="row rowmod4">   <!-- d-block: los pone verticales -->
               <div class="col-xl-3 colmod4" ></div>
<!--............................................................................................................... -->
               <div class="col-xl-9 colmod4" ></div>  <!-- align-self-start -->
           </div><!-- row -->
       </div><!--mod1 -->
<!--............................................................................................................... -->
</div>  <!-- container -->
</div> <!-- font_staat -> 

    

@endsection


