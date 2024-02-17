<x-Template title="Produk">
    @slot('body')

    @if($message = Session::get('success'))
    <div class="alert alert-success mx-2" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <a href="{{route('product.create')}}">
        <button class="btn btn-primary">Tambah Product</button>
    </a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $key =>$prd)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$prd->nama}}</td>
                <td>Rp.{{$prd->harga}}</td>
                <td>{{$prd->stok}}</td>
                <td>
                    <a href="{{route('product.edit',$prd->id)}}">
                        <button class="btn btn-primary mx-2">Ubah</button>
                    </a>
                    <form action="{{route('product.delete',$prd->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-2">Hapus</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endslot
</x-Template>