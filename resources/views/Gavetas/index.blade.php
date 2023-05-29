@extends('layout.main')

@section('title', 'MorgeGest | Listar Gavetas')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Gavetas</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Gavetas</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Listar Gavetas</h3>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>Localização Gaveta</th>
                                        <th>Camera</th>
                                        <th>Ultima manutenção</th>
                                        <th>Disponibilidade</th>
                                        <th>Info. Adicionais</th>
                                        <th>Operações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gavetas as $gaveta)
                                        <tr>
                                            <td>{{ $gaveta->id }}</td>
                                            <td>{{ $gaveta->local_gaveta }}</td>
                                            <td>{{ $gaveta->camera_id }}</td>
                                            <td>{{ $gaveta->data_ultima_manutencao }}</td>
                                            <td>{{ $gaveta->disponibilidade_gaveta }}</td>
                                            <td>{{ $gaveta->info_adicional }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>                                        
                                    @endforeach
                                </tbody>
                              </table>
                        </div>

                    </div>

                </div>
            </div> 
        </div>
    </section>
</div>
@endsection