@extends('layout.main')

@section('title', 'MorgeGest | Listar Cadaveres')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Cameras</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cameras</li>
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
                            <h3 class="card-title">Listar Cameras</h3>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Localização</th>
                                        <th>Descrição da Área</th>
                                        <th>Data da Instalação</th>
                                        <th>Ultima Manutenção</th>
                                        <th>Estado Actual</th>
                                        <th>Operações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cameras as $camera)
                                        <tr>
                                            <td>{{ $camera->localizacao_camera }}</td>
                                            <td>{{ $camera->descricao_area_camera }}</td>
                                            <td>{{ $camera->data_instalacao }}</td>
                                            <td>{{ $camera->data_ultima_manutencao }}</td>
                                            <td class="text-center">
                                                <span style="background-color:{{ $camera->cor }}; border-radius: 5px;" class=" p-1">
                                                    {{ $camera->estado_camera }}
                                                </span>
                                            </td>
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