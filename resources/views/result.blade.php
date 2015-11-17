@extends('index')


@section('result')
	@section('title')
		<h3>Keyword: <span style="color:red">-{!! $keyword!!}</span></h3>
	@endsection
	<div class=" container result">
		<table class="table table-hover dataTable">

			<tr>
		        <td>STT</td>
		        <td>Word</td>
		        <td>Word Type</td>
		        <td>Definition</td>

		    </tr>
		<?php $i=0;?>
		@forelse($word as $word)
			<tr>
				<td>{!!$i+1!!}</td>
				<td>{!! $word->word!!}</td>
		        <td>{!! $word->wordtype!!}</td>
		        <td>{!! $word->definition!!}</td>
			</tr>
		<?php $i++ ?>
		@empty
			<tr>
				No word!
			</tr>
		@endforelse
		</table>
	</div>
@endsection