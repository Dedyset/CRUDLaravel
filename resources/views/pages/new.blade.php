@extends('layouts.default')

@section('content')
<div class="small-12 large-12 column"> 
	<div class="content"> 
		<h2 class="new-post"> 
			Tambah Data Anggota 
			<span class="right">{{ Html::linkRoute('anggota.list','Cancel',array(),['class' => 'button tiny radius']) }}</span> 
		</h2> 
		<hr> 
		{{ Form::open(['route'=>['anggota.save']]) }} 
		<div class="row"> 
			<div class="small-5 large-5 column"> 
				{{ Form::label('nama','Nama:') }} 
				{{ Form::text('nama') }} 
			</div> 
		</div> 
		<div class="row"> 
			<div class="small-7 large-7 column"> 
				{{ Form::label('alamat','Alamat:') }} 
				{{ Form::textarea('alamat') }} 
			</div> 
		</div> 
		@if($errors->has()) 
			@foreach($errors->all() as $error) 
			<div data-alert class="alert-box warning round"> 
				{{ $error }} 
				<a href="#" class="close">&times;</a> 
			</div> 
			@endforeach 
		@endif 
		{{ Form::submit('Save',['class'=>'button tiny radius']) }} 
		{{ Form::close() }} 
	</div> 
</div>
@endsection