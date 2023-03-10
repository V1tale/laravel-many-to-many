@extends('layouts.admin')

@section('content')
    <div class="container">
        </h4>
        <div class="text-start mt-4">
            <a class="btn btn-dark" href="{{ url()->previous() }}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project->slug) }}">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
        </div>
        <h4 class="text-center text-primary mt-3">
            {{ $project->type ? $project->type->name : 'Nessuna categoria selezionata' }}
            {{-- {{ $post->category?->name }} --}}
            <h2 class="text-center">{{ $project->title }}</h2>
            <div class="tags">

                <h5>Tecnologie utilizzate:
                    @forelse ($project->technologies as $tech)
                        <span class="text-primary">{{ $tech->name }}</span>
                    @empty
                        <span>Nessun tag</span>
                    @endforelse
                </h5>
            </div>
            <div class="text-center">
                @if ($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ 'immagine di ' . $project->image }}">
                @else
                    <div class="w-50 bg-secondary py-4 text-center d-inline-block">
                        No image yet
                    </div>
                @endif
            </div>
            <p class="mt-3">{{ $project->content }}</p>
    </div>
@endsection
