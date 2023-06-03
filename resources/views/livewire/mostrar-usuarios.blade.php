<div class="bg-white overflow-hidden shadow-sm">

    @foreach ($usuarios as $usuario)
     <div class="p-6 overflow-hidden shadow-md dark:bg-dark-eval-1 md:flex md:justify-between md:items-center">
         
         <div class="leading-10">
             <a href="#" class="text-xl font-bold">
                 {{$usuario->name}}
             </a>
         </div>
 
         <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
             <a
             href="{{route('usuarios.show', $usuario->id)}}"
             class="bg-slate-700 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
             >Detalles</a>
 
             
 
             <a
             href="{{route('usuarios.edit', $usuario->id)}}"
             class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center" 
             >Editar</a>
   
 
             <button 
                 wire:click="$emit('eliminarUsuario',{{$usuario->id}})"
                 class="bg-red-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
             >Eliminar</button>
         </div>
 
     </div>
    @endforeach
    
 
 </div>
 
 <div class="flex justify-center mt-10">
     {{$usuarios->links()}}
 </div>