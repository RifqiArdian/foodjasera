@extends('layouts.app')

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
<table border="1">
	<tr>
	<th>nama</th>
	<th>email</th>
	<th>password</th>
	<th>no_hp</th>
	<th>status</th>
	<th>penghasilan</th>
	<th>foto</th>
	<th>id Pujasera</th>
	<th>Aksi</th>
</tr>
@foreach($toko as $kurir)
<tr>
	<td>{{$kurir->nama}}</td>
	<td>{{$kurir->email}}</td>
	<td>{{$kurir->password}}</td>
	<td>{{$kurir->no_hp}}</td>
	<td>{{$kurir->status}}</td>
	<td>{{$kurir->penghasilan}}</td>
	<td><img src="{{ url('img') }}/{{ $kurir->foto }}" class="img-circle"></td>
	<td>{{$kurir->user_id}}</td>
	<td><form action="{{ route('kurir.destroy', $kurir->id) }}" method="post">
	        <a href="{{ route('kurir.edit',$kurir->id) }}" class=" btn btn-sm btn-primary">Ubah</a>
	        {{ csrf_field() }}
	        {{ method_field('DELETE') }}
	        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form>
    </td>
</tr>
@endforeach
<form method="post" action="{{ route('kurir.store')}}">
              {{ csrf_field() }}
              {{ method_field('POST') }}
              <div class="form-group">
                <input type="file" name="foto">
              </div>
              <div class="form-group">
                <input type="text" name="nama" placeholder="Nama">
              </div>
              <div class="form-group">
                <input type="text" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" name="password" placeholder="password">
              </div>
              <div class="form-group">
                <input type="text" name="no_hp" placeholder="No HP">
              </div>

              <div class="form-group">
                <input type="text" name="status" placeholder="status">
              </div>
              <div class="form-group">
                <input type="text" name="user_id" placeholder="id Pujasera">
              </div>
              <button type="submit" class="btn btn-success" onclick="return confirm('Yakin ingin menambah data?')">Ubah</button>
            </form>
</table>
</section>
</section>
@endsection