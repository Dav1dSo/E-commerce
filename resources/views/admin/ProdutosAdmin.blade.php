@extends('layouts.Main');

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Produtos</h1>
                    <a href="/adicionarProdutos"
                        class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
                </div>
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">#
                            </th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
                                style="width: 150px">Imagem</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                Nome</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                Valor</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                Estoque</th>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">
                                Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @if (count($produtos) > 0)
                            @foreach ($produtos as $produto)
                                <tr @if ($loop->even) class="bg-gray-100" @endif>
                                    <td class="px-4 py-3">{{ $produto->id }}</td>
                                    <td class="px-4 py-3">
                                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                            src="{{ url("storage/{$produto->imagem}") }}">
                                    </td>
                                    <td class="px-4 py-3">{{ $produto->name }}</td>
                                    <td class="px-4 py-3">R$ {{ $produto->preco }}</td>
                                    <td class="px-4 py-3">{{ $produto->estoque }}</td>
                                    <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                                        <a href="/editarProdutos/{{ $produto->id }}/edit"
                                            class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>
                                        <a class="mt-3 text-indigo-500 inline-flex items-center">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="grid grid-cols-3 gap-4" ">
                                <td style="text-align: center" style="width: 100%" >Em breve...</td>
                            </div>
                        @endif
                    </tbody>    
                </table>
            </div>
        </div>
    </section>
@endsection
