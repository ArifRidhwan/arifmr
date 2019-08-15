@extends('layouts.app')
<br>
<br>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                
                <div class="card-header">Bidang Studi</div>
                <div class="card-body">
                <br>
                    <center> <a href="{{ route('backendbistud.create') }}"
                        class="btn btn-outline-primary">Tambah</a>
                    </center>
                <br>

                <div class="table-responsive">
                     <table class="table table-striped">
                         <thead class="thead-danger">
                       <tr>
                           <th >No</th>
                           <th>Kode Bidang Studi</th>
                           <th>Nama Bidang Studi</th>

                           <th colspan="3">Aksi</th>
                       </tr>
                       @php $no =1; @endphp
                       @foreach ($bidang_studi as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->bidang_kode }}</td>
                            <td>{{ $data->bidang_nama }}</td>
    
                            
                            <td>
                                <a href="{{ route('backend.bidang-studi.edit',$data->id) }}" class="btn btn-outline-success">
                                            Edit </a>
                            </td>
                            
                            <td>
                                <a href="{{ route('backend.bidang-studi.show',$data->id) }}" class="btn btn-outline-info">
                                            Detail </a>
                            </td>        
                            
                            <td>
                                <form action="{{ route('backend.bidang-studi.destroy',$data->id) }}" method="post">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-outline-danger" type="submit">Hapus
        
                                        </button>
                                </form>
                            </td>
                        </tr>                      
                        @endforeach
                    </table>
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection