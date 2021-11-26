@extends('plantillas.plantilla')
@section('title', 'listado clientes')
@section('content')

<div class="font_pragati">
<div class="container-fluid">
<!-- ........................................................................................................................... -->    
    <div class="Mod1">
    <div class="row rowmod1">
        <div class="col-10 shadow">
            <h4>Listado Clientes</h4>

            <div class="table-responsive">
                <table class="table table-borderless table-sm">
                    <tr>
                        <td><input type="text" size="1px"  placeholder="id"></td>
                        <td><input type="text" size="13px" placeholder="nombre"></td>
                        <td><input type="text" size="13px" placeholder="apellido"></td>
                        <td><input type="text" size="20px" placeholder="email"></td>
                        <td><input type="text" size="8px"  placeholder="cp"></td>
                        <td><input type="text" size="15px" placeholder="nick"></td>
                    </tr>
                @foreach($clientes as $cliente)
                
                    <tr>
                        <td><input disabled type="text" size="1px"  name="id"       value="{{$cliente->id}}"></td>
                        <td><input disabled type="text" size="13px" name="nombre"   value="{{$cliente->nombre}}"></td>
                        <td><input disabled type="text" size="13px" name="apellido" value="{{$cliente->apellido}}"></td>
                        <td><input disabled type="text" size="20px" name="email"    value="{{$cliente->email}}"></td>
                        <td><input disabled type="text" size="8px"  name="cp"       value="{{$cliente->cp}}"></td>
                        <td><input disabled type="text" size="15px" name="nick"     value="{{$cliente->nick}}"></td>
                    </tr>
                
                @endforeach
                </table>
         </div>  
            </div>  


        </div>
    </div>
    </div>
<!-- ........................................................................................................................... -->        
</div> <!-- container -->
</div> <!-- font pragati -->
@endsection
