@extends('layouts.app')

@section('content')



<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row align-items-center mb-2">
                    <div class="col">
                        <h2 class="h5 page-title">Data Barang</h2>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="toolbar row mb-3">
                            <div class="col">
                                <form class="form-inline">
                                    <div class="form-row">
                                        <div class="form-group col-auto">
                                          
                                            <label for="search" class="sr-only">Search</label>
                                            <input type="text" name="search" id="search" class="form-control" placeholder="Search" />
                                       
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col ml-auto">
                                <div class="dropdown float-right">
                                    <a href="{{route('barang.create')}}" class="btn btn-primary float-right ml-3" type="button">Tambah Data</a>
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                                    <div class="dropdown-menu" aria-labelledby="actionMenuButton">
                                        <a class="dropdown-item" href="#">Export</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table --><h4 align="center">Total Data : <span id="total_records"></span></h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr role="row" class="bg-light">
                                    <th><strong>#</strong></th>
                                    <th><strong>Nama Barang</strong></th>
                                    <th><strong>Harga</strong></th>
                                    <th><strong>Stok</strong></th>
                                    <th><strong>Tempat Penyimpanan</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;?>
                               
                               @forelse ($items as $index => $item)
                               <?php $no++ ;?>
                               
                               <tr>
                                <td>{{$index + $items->firstItem() }}</td>
                                <td>{{$item->nama_barang}}</td>
                                <td>{{$item->harga}}</td>
                                <td>{{$item->stock}}</td>
                                <td>{{$item->rak}}</td>
                                <td>
                                    <form action="{{route('barang.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fe fe-trash"></i>
                                         </button>
                                         <a href="{{route('barang.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </form>
                                 </td>
                                </tr>
                               @empty
                                   <tr>
                                       <td colspan="5" class="text-center p-5">
                                           Data Tidak Tersedia
                                       </td>
                                   </tr>
                               @endforelse
                            </tbody>
                        </table>
                        {{ $items->links() }}
                      
                    </div>
                </div>
            </div> <!-- simple table -->
        </div> <!-- end section -->

    </div> <!-- .col-12 -->
    
    
</main> <!-- main -->

@endsection
