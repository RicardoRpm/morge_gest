@extends('layout.main')

@section('title', 'MorgeGest | Listar Cadaveres')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Cadaveres</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cadaveres</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    @if(session('msg') == 'SIM')
                        <div class="alert alert-success" role="alert">
                            Cadaver levantado com sucesso...
                        </div>
                    @else 
                        @if(session('msg') == 'NÃO')
                            <div class="alert alert-danger" role="alert">
                                Não foi possível levantar o cadaver...
                            </div>
                        @endif
                    @endif

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Listar Cadaveres</h3>
                        </div>

                        <div class="input-group my-2 mx-3" style="width: 450px">
                            <input type="text" class="form-control" placeholder="Insira o código do cadaver">
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Idade</th>
                                        <th>Causa da Morte</th>
                                        <th>Data e hora do Obito</th>
                                        <th>Entrada na Morgue</th>
                                        <th>Localização</th>
                                        <th>Operações</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($cadaveres as $cadaver)
                                        <tr>
                                            <td>{{ $cadaver->nome }}</td>
                                            <td>{{ $cadaver->idade }}</td>
                                            <td>{{ $cadaver->causa_morte }}</td>
                                            <td>{{ $cadaver->data_hora_obito }}</td>
                                            <td>{{ $cadaver->data_hora_entrada_morgue }}</td>
                                            <td>Gaveta - {{ $cadaver->id_gaveta }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <a href="{{ route('cadaveres.levantarById', $cadaver->id) }}" class="btn btn-warning">
                                                    <i class='fas fa-handshake'></i>
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