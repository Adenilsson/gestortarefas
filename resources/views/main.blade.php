@extends('templates/main_layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h4>Tarefas</h4>
            @if($tasks->count() != 0)
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class="w-50">Tarefa</th>
                        <th class="w-25 text-center">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $tasl )
                    <tr>
                        <td>{{ $task->task_name }}'</td>
                        <td class="text-center">{{ $task->status }}</td>
                        <td class="text-center"> [actions]</td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            @else
            <p class="text-center opacity-50 my-5">
                Não existem tarefas cadastradas.
            </p>
            @endif
        </div>
    </div>
</div>


@endsection