@extends('app') 

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table  class="table">

                <tr>
                     
                    <td><a href="home" class="btn btn-primary active" role="button">Todos los cursos</a></td>
                    <td><a href="cursoa" class="btn btn-success active" role="button">Cursos activos</a></td>
                    <td><a href="cursoc" class="btn btn-danger active" role="button">Cursos concluidos</a></td>
                    <td><a href="curson" class="btn btn-warning active" role="button">Cursos por iniciar</a></td>

                </tr>
              

            </table>


        </div>
    </div>
</div>


@yield('contentd')


@endsection
