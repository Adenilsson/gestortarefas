@extends('templates/main_layout')

@section('content')
<div class="container"></div>
    <div class="row">
        <div class="col">
            <h4>Tarefas</h4>
            <table class="table table-striped table-borderd">
                <thead class="table-dark">
                    <tr>
                        <th class="w-50">Tarefa</th>
                        <th class="w-25 text-center">Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <p class="text-center opacity-50 my-3">
                Não existem tarefas cadastradas.
            </p>
        </div>
    </div>
</div>
<h3>Main</h3>

@endsection