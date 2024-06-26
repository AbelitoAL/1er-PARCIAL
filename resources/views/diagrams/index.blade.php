<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diagramas') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="p-6">
                    <a class="bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{route('diagram.create')}}">Crear diagrama</a>
                </div>
                <div class="px-6 text-gray-900 font-bold">
                    {{ __("Mis diagramas") }}
                    @forelse ($diagrams as $diagram)
                        <div class="bg-gray-100 p-2 border rounded-lg mt-2 flex justify-between">
                            <div>
                                <a href="{{ route('diagram.show', $diagram->id) }}" class="text-gray-900 hover:text-gray-500 text-md hover:text-lg">{{$diagram->name}}</a>
                                <p class="text-sm text-gray-400">{{$diagram->description}}</p>

                            </div>
                            <form action="/diagrams/{{$diagram->id}}/delete" method="POST">
                                @csrf
                                <input type="submit" value="Eliminar" class="bg-red-500 text-white p-3 rounded-lg">
                            </form>
                        </div>
                    @empty
                        <div class=" text-white bg-red-700 p-2 rounded-lg">
                            {{ __("No tienes diagramas") }}
                        </div>
                    @endforelse
                </div>


{{-- 
                <div class="p-6 text-gray-900 font-bold">
                    {{ __("Invitaciones") }}
                    @forelse ($diagrams_g as $diagram_g)
                        <div class="bg-gray-100 p-2 border rounded-lg mt-2">
                            <a href="{{ route('diagram.show', $diagram_g->id) }}" class="text-gray-900 hover:text-gray-500 text-md hover:text-lg">{{$diagram_g->name}}</a>
                            <p class="text-sm text-gray-400">{{$diagram_g->description}}</p>
                        </div>
                    @empty
                        <div class="text-white bg-red-700 p-2 rounded-lg">
                            {{ __("No tienes invitaciones") }}
                        </div>
                    @endforelse
                </div> --}}


            </div>
        </div>
    </div>
    {{-- <livewire:scripts /> --}}
</x-app-layout>
