@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="p-2 text-primary fw-bold border-bottom border-primary mb-4">Penjualan Reseller</h2>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Reseller</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('orders.store') }}" method="POST" id="orderForm">
                    @csrf
                    <div class="form-group ">
                        <label for="anggota_id">Pilih Reseller</label>
                        <select name="anggota_id" id="anggota_id" class="form-control" required>
                            @foreach ($anggota as $b)
                                <option value="{{ $b->id }}">{{ $b->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="product-list">
                        <div class="form-group product-group m-0">
                            <label for="product_id">Produk</label>
                            <select id="product_id" class="form-control product-select" required>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                            <label for="quantity">Jumlah</label>
                            <input type="number" id="quantity" class="form-control quantity-input" required>
                            <button type="button" class="btn btn-primary mt-4" id="addProduct">Masukkan Keranjang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow my-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Reseller</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="salesListTable">
                        <thead>
                            <tr>
                                <th>Reseller</th>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Daftar produk yang dipilih akan ditambahkan di sini -->
                        </tbody>
                    </table>
                </div>
                <button type="button" class="btn btn-primary" id="submitOrder">Buat Penjualan</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.getElementById('addProduct').addEventListener('click', function() {
        var productSelect = document.getElementById('product_id');
        var quantityInput = document.getElementById('quantity');
        var coordinatorSelect = document.getElementById('anggota_id');

        var productId = productSelect.value;
        var productName = productSelect.options[productSelect.selectedIndex].text;
        var quantity = parseInt(quantityInput.value);
        var coordinatorId = coordinatorSelect.value;
        var coordinatorName = coordinatorSelect.options[coordinatorSelect.selectedIndex].text;

        if (productId && quantity > 0) {
            var table = document.getElementById('salesListTable').getElementsByTagName('tbody')[0];

            var existingRow = Array.from(table.rows).find(row => {
                var rowProductId = row.dataset.productId;
                var rowCoordinatorId = row.dataset.anggotaId;
                return rowProductId === productId && rowCoordinatorId === coordinatorId;
            });

            if (existingRow) {
                var existingQuantity = parseInt(existingRow.cells[2].textContent);
                var newQuantity = existingQuantity + quantity;
                existingRow.cells[2].textContent = newQuantity;

                var existingInput = document.querySelector(
                    `input[name="quantity[]"][data-product-id="${productId}"][data-anggota-id="${coordinatorId}"]`
                );
                existingInput.value = newQuantity;
            } else {
                var newRow = table.insertRow();
                newRow.setAttribute('data-product-id', productId);
                newRow.setAttribute('data-anggota-id', coordinatorId);

                var coordinatorCell = newRow.insertCell(0);
                var productCell = newRow.insertCell(1);
                var quantityCell = newRow.insertCell(2);
                var actionCell = newRow.insertCell(3);

                coordinatorCell.textContent = coordinatorName;
                productCell.textContent = productName;
                quantityCell.textContent = quantity;

                var hiddenProductId = document.createElement('input');
                hiddenProductId.type = 'hidden';
                hiddenProductId.name = 'product_id[]';
                hiddenProductId.value = productId;
                hiddenProductId.dataset.productId = productId;
                hiddenProductId.dataset.anggotaId = coordinatorId;
                orderForm.appendChild(hiddenProductId);

                var hiddenQuantity = document.createElement('input');
                hiddenQuantity.type = 'hidden';
                hiddenQuantity.name = 'quantity[]';
                hiddenQuantity.value = quantity;
                hiddenQuantity.dataset.productId = productId;
                hiddenQuantity.dataset.anggotaId = coordinatorId;
                orderForm.appendChild(hiddenQuantity);

                actionCell.innerHTML =
                    '<button type="button" class="btn btn-danger remove-product">Hapus</button>';
                actionCell.querySelector('.remove-product').addEventListener('click', function() {
                    newRow.remove();
                    hiddenProductId.remove();
                    hiddenQuantity.remove();
                });
            }

            productSelect.value = '';
            quantityInput.value = '';
        } else {
            alert('Harap masukkan jumlah yang valid.');
        }
    });

    document.getElementById('submitOrder').addEventListener('click', function() {
        document.getElementById('orderForm').submit();
    });
</script>
@endsection
