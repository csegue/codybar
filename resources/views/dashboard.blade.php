<<?php 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
?>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <!-- ....................................................................................................... -->
        <?php    
                if (Auth::check() && Auth::id()=='1') 
                {
                    $user = Auth::user();            echo $user; echo "<br>";   
                    $usu_id= Auth::id();             echo $usu_id; echo "<br>";   
                    $usu_nom= auth()->user()->name;  echo $usu_nom; echo "<br>";
                    $usu_mai= auth()->user()->email; echo $usu_mai; echo "<br>";
                    echo "ROL: Administrador (podrás crear, leer, modificar y borrar)";
                    $_SESSION['loguin']=array();
                    $_SESSION['login']['u_id']= $usu_id;    
                }else{
                    $usu_id= Auth::id(); 
                    echo "ROL: Lector (NO podrás: crear, modificar y borrar)";
                    $_SESSION['loguin']=array();
                    $_SESSION['login']['u_id']= $usu_id;    
                }
        ?>
        <!-- ....................................................................................................... -->

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
