@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">						
                        <table>
                            <?php $total = 0; ?>
                            @foreach ($inscritos as $i)
                                <tr>
                                <td>{{$i->course_id}}</td>
                                <td>{{$i->course_name}}</td>
                                <td align="right">{{ number_format($i->inscritos)}}</td>
                                </tr>
                                <?php $total += $i->inscritos;?>
                            @endforeach
                            <tr>
                                <td></td>
                                <td>Total:</td>
                                <td align="right">{{number_format($total)}}</td>
                            </tr>
                        </table>                                   							
		</div>
	</div>
</div>
@endsection
