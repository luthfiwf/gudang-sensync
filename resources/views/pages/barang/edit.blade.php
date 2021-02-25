@extends('layouts.app')

@section('content')


<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Edit Data Barang</strong>
                      <small>{{$item->nama_barang}}</small>
                    </div>
                    <div class="card-body">
                      <form action="{{route('barang.update', $item->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                          <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang"  
                            value="{{old('nama_barang') ? old('nama_barang') : $item->nama_barang}}"/>
                            @error('nama_barang') <div class="text-muted">{{$message}}</div>@enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="harga" placeholder="Harga" 
                            value="{{old('harga') ? old('harga') : $item->harga}}"/>
                            @error('harga') <div class="text-muted">{{$message}}</div>@enderror
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="stock" class="col-sm-3 col-form-label">stock</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="stock" placeholder="Stok Barang" 
                              value="{{old('stock') ? old('stock') : $item->stock}}"/>
                              @error('stock') <div class="text-muted">{{$message}}</div>@enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="rak" class="col-sm-3 col-form-label">Tempat Penyimpanan</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="rak" placeholder="Penyimpanan" 
                              value="{{old('rak') ? old('rak') : $item->rak}}">
                              @error('rak') <div class="text-muted">{{$message}}</div>@enderror
                            </div>
                          </div>
                          <br><br>
                          <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary">Edit Barang</button>
                          </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</main>
@endsection