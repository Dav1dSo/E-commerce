@extends('layouts.Main')

@section("content")
<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        @if(count($produtos) > 0)
        <div class="flex flex-wrap -m-4">
            @foreach($produtos as $produto)
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ url("/storage/$produto->imagem") }}">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">{{ $produto->nome }}</h2>
                    <p class="mt-1">R$ {{ number_format($produto->preco, 2) }}</p>
                </div>
                <a href="{{ route('produtos', $produto->nomeId) }}" class="mt-3 text-indigo-500 inline-flex items-center">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            @endforeach
            @else 
            <div class="grid justify-items-center">
                <h1>Em breve...</h1>
            </div>
        </div>
        @endif
    </div>
</section>  
@endsection