@extends('cursos') @section('contentd') 
<div class="container">
    <div class="row">
        <div>
            <br>

            <table class="table table-hover">
               <thead>
                <tr>

                    <td class="success" style="font-size: medium">ID</td>
                    <td class="success" aling="right" style="font-size: medium">ID Curso</td>
                    <td class="success" aling="right" style="font-size: medium">Nombre</td>
                    <td class="success" aling="right" style="font-size: medium">Fecha Inicio Curso</td>
                    <td class="success" aling="right" style="font-size: medium">Fecha Fin Curso</td>
                    <td class="success" aling="right" style="font-size: medium">Fecha Inicio Inscripción</td>
                    <td class="success" aling="right" style="font-size: medium">Fecha Fin Inscripción</td>
                    

                </tr>
                </thead>

                <?php $total = 0; ?>
                    @foreach ($activos as $i)
<tbody>
                    <tr>
                        <td aling="right">{{$i->id}}</td>
                        <td aling="right">{{$i->course_id}}</td>
                        <td aling="right">{{$i->course_name}}</td>
                        <td aling="right">{{$i->inicio}}</td>
                        <td aling="right">{{$i->fin}}</td>
                        <td aling="right">{{$i->inicio_inscripcion}}</td>
                        <td aling="right">{{$i->fin_inscripcion}}</td>

                    
                    @endforeach
</tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection