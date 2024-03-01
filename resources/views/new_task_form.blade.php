@extends('templates/main_layout')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col">
            <h4>Nova Tarefa</h4>
            <hr>
            <form action="{{ route('new_task_submit')}}">
                @csrf
                {{-- Task name --}}
                <div class="mb-3">
                    <label for="text_task_name" class="form-label">Nome da Tarefa</label>
                    <input type="text" name="text_task_name" id="text_task_name " class="form-control" required placeholder="Nome da Tarefa" value="{{ old('tex_task_name')}}">" 
                    @error('text_task_name')
                        <div class="text-warning">{{ $erros->get('text_task_name') }}</div>
                    @enderror
                </div>
                {{-- task descripton --}}
                <div class="mb-3">
                    <label for="text_task_descripion" class="form-label">Nome da Tarefa</label>
                    <input type="text" descripion="text_task_descripion" id="text_task_descripion " class="form-control" required placeholder="Nome da Tarefa" value="{{ old('tex_task_descripion')}}">" 
                    @error('text_task_descripion')
                        <div class="text-warning">{{ $erros->get('text_task_name') }}</div>
                    @enderror
                </div>
            </form>
            
        </div>
    </div>
</div>


@endsection