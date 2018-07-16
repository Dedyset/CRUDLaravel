@extends('layouts.default')

@section('content')
<div class="small-12 large-12 column">
    <div class="content">
        <span class="right">{{ Html::linkRoute('anggota.new','Tambah Anggota',array(),['class' => 'button tiny radius']) }}</span>
        <h2 class="post-listings">Data Anggota</h2><hr>
        <table>
            <thead>
                <tr> 
                    <th width="350">Nama Anggota</th>
                    <th width="400">Alamat</th>
                    <th width="120">Edit</th>
                    <th width="120">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anggota as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>
                        <a href="{{ route('anggota.edit',$data->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        {{-- Html::linkRoute('anggota.edit','Edit',$data->id) --}}
                    </td>
                    <td>
                        <a href="{{ route('anggota.delete',$data->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                        {{-- Html::linkRoute('anggota.delete','Delete',$data->id) --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $anggota->links() !!}
    </div>
</div>
@endsection
