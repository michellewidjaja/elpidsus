@extends('elpidsus::decay-case.operator.template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Daftar Benda Sitaan')

@section('content')

    <div class="box-body">
		@include('decay-case.partials._bendasitaan', ['cases' => $cases])
	</div>

@stop

@section('script')

@endsection