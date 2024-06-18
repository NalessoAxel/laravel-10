@extends('base')

@section('title', 'Creation d\' un nouvel article')

@section('content')
    <form action="" method="post" class="flex flex-col justify-center max-w-xl gap-3 ">
        @csrf
        <div>
            <label class="text-lg">Title:</label>
            <input type="text" name='title' value='{{ old('title', 'Mon titre') }}'
                class="p-2 border border-black rounded-md w-min " />
            @error('title')
                <p class="text-red-600"> {{ $message }}</p>
            @enderror
        </div>

        <div class="w-full">
            <label class="text-lg">Content:</label>
            <textarea class="p-2 border border-black rounded-md" name='content' value='{{ old('content', 'Contenu demo') }}'></textarea>
            @error('content')
                <p class="text-red-600"> {{ $message }}</p>
            @enderror
        </div>

        <button
            class="flex  justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enregistrer</button>
    </form>
@endsection
