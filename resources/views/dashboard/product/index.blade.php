@extends('/dashboard/layouts/main')

@section('content')

<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">List Data</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/dashboard">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}">Product</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="align-items-center">

                            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm ml-auto">
                                <i class="fa fa-plus"></i>
                                Create data
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-primary">
                                {{ Session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Product</th>
                                        <th>Harga</th>
                                        <th>Nama Category</th>
                                        <th>Gambar</th>
                                        <th style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $produk->nama_produk }}</td>
                                        <td>Rp. {{ number_format($produk->harga, 0, ',','.') }}</td>
                                        <td>{{ $produk->category->nama_category }}</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{ route('products.edit', $produk->id) }}" class="btn btn-success btn-sm mr-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                    <form action="{{ route('products.destroy', $produk->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                            </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection