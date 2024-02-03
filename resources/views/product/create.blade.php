<x-Template title="Tambah Product">
    @slot('body')
    <form action="" method="post">
        <div class="m-3">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </form>
    @endslot
</x-Template>