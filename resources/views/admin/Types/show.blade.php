@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center">{{ $type->name }}</h2>
        <div class="d-flex">
            <a class="btn btn-dark" href="{{ route('admin.types.index') }}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <button form="edit-type-{{ $type->id }}" class="btn btn-secondary" href="" type="submit">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
            <form action="{{ route('admin.types.destroy', $type->slug) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
        </div>
        <h4>Progetti associati:</h4>
        <ul>
            @forelse ($type->projects as $project)
                <li>
                    <a href="{{ route('admin.projects.show', $project->slug) }}">
                        {{ $project->title }}
                    </a>
                </li>
            @empty
                <li>Nessun progetto associato a questa tipologia</li>
            @endforelse
        </ul>
    </div>
@endsection
