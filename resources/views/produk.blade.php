<x-Template title="Produk">
    @slot('body')
    <a href="{{route('product.create')}}">
        <button class="btn btn-primary">Tambah Product</button>
    </a>
    @endslot
</x-Template>