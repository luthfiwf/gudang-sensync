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
                      <strong class="card-title">Tambah Barang Masuk</strong>
                    </div>
                    <div class="card-body">
                      <form action="{{route('barangmasuk.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                          <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang"  value="{{old('nama_baang')}}"/>
                            @error('nama_barang') <div class="text-muted">{{$message}}</div>@enderror
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="harga" class="col-sm-3 col-form-label">Re Stock</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="harga" placeholder="Harga" value="{{old('restock')}}"/>
                            @error('restock') <div class="text-muted">{{$message}}</div>@enderror
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="stock" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="stock" placeholder="Stok Barang" value="{{old('harga')}}"/>
                              @error('harga') <div class="text-muted">{{$message}}</div>@enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="stock" class="col-sm-3 col-form-label">Total</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control" name="stock" placeholder="Stok Barang" value="{{old('total')}}"/>
                              @error('total') <div class="text-muted">{{$message}}</div>@enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="stock" class="col-sm-3 col-form-label">Tgl masuk</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="stock" placeholder="Stok Barang" value="{{old('harga')}}"/>
                              @error('harga') <div class="text-muted">{{$message}}</div>@enderror
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="rak" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="rak" placeholder="Penyimpanan" value="{{old('status')}}">
                              @error('status') <div class="text-muted">{{$message}}</div>@enderror
                            </div>
                          </div>
                          <br><br>
                          <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</main>
@endsection