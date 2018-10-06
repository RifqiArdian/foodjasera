@extends('layouts.app')

@section('content')
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Daftar "Nama Toko"</h3>

        <!-- row -->
        <div class="row mb">
         <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-bordered table-sm"  >        
                <form method="post" action="{{ route('toko.store')}}">
              {{ csrf_field() }}
              {{ method_field('POST') }}
              <div class="form-group">
                <input type="text" name="user_id" placeholder="id Pujasera">
              </div>
              <div class="form-group">
                <input type="text" name="nama" placeholder="nama">
              </div>
              <div class="form-group">
                <input type="text" name="deskripsi" placeholder="deskripsi">
              </div>
              <div class="form-group">
                <input type="text" name="status" placeholder="status">
              </div>
              <button type="submit" class="btn btn-success" onclick="return confirm('Yakin ingin menambah data?')">Ubah</button>
            </form>
</table>
</div></div></div>
        <div class="row mb">
         <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-bordered table-sm"  >
                
  <thead>
	<tr>
	<th>id Pujasera</th>
	<th>nama</th>
	<th>deskripsi</th>
	<th>status</th>
	<th>Aksi</th>
</tr>
</thead>
<tbody>

  @foreach($toko as $kurir)
  <tr>
	<td>{{$kurir->user_id}}</td>
	<td>{{$kurir->nama}}</td>
	<td>{{$kurir->deskripsi}}</td>
	<td>{{$kurir->status}}</td>
	<td><form action="{{ route('toko.destroy', $kurir->id) }}" method="post">
	        <a href="{{ route('kurir.edit',$kurir->id) }}" class=" btn btn-sm btn-primary">Ubah</a>
	        {{ csrf_field() }}
	        {{ method_field('DELETE') }}
	        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
            <!-- /content-panel -->
         </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
</section>
</section>
@endsection