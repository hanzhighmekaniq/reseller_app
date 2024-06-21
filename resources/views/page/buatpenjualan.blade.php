@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Penjualan</h1>
    <form action="{{ route('orders.store') }}" method="POST" id="orderForm">
        @csrf
        <div class="form-group">
            <label for="bos_id">Pilih Koordinator</label>
            <select name="bos_id" id="bos_id" class="form-control" required>
                @foreach($bos as $b)
                <option value="{{ $b->id }}">{{ $b->name }}</option>
                @endforeach
            </select>
        </div>
        <div id="product-list">
            <div class="form-group product-group">
                <label for="product_id">Product</label>
                <select id="product_id" class="form-control product-select" required>
                    @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" class="form-control quantity-input" required>
                <button type="button" class="btn btn-secondary" id="addProduct">Masukkan Keranjang</button>
            </div>
        </div>
    </form>

    <h2 class="mt-5">Keranjang</h2>
    <table class="table table-bordered" id="salesListTable">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Daftar produk yang dipilih akan ditambahkan di sini -->
        </tbody>
    </table>
    <button type="button" class="btn btn-primary" id="submitOrder">Buat Penjualan</button>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('addProduct').addEventListener('click', function() {
        var productSelect = document.getElementById('product_id');
        var quantityInput = document.getElementById('quantity');

        var productId = productSelect.value;
        var productName = productSelect.options[productSelect.selectedIndex].text;
        var quantity = parseInt(quantityInput.value);

        if (productId && quantity) {
            var table = document.getElementById('salesListTable').getElementsByTagName('tbody')[0];
            var existingRow = Array.from(table.rows).find(row => row.cells[0].textContent === productName);

            if (existingRow) {
                var existingQuantity = parseInt(existingRow.cells[1].textContent);
                var newQuantity = existingQuantity + quantity;
                existingRow.cells[1].textContent = newQuantity;

                // Update hidden input values
                var existingInput = document.querySelector(`input[name="quantity[]"][data-product-id="${productId}"]`);
                existingInput.value = newQuantity;
            } else {
                var newRow = table.insertRow();
                var productCell = newRow.insertCell(0);
                var quantityCell = newRow.insertCell(1);
                var actionCell = newRow.insertCell(2);

                productCell.textContent = productName;
                quantityCell.textContent = quantity;
                actionCell.innerHTML = '<button type="button" class="btn btn-danger remove-product">Remove</button>';

                // Add hidden inputs to the form for submission
                var orderForm = document.getElementById('orderForm');
                orderForm.innerHTML += `<input type="hidden" name="product_id[]" value="${productId}">`;
                orderForm.innerHTML += `<input type="hidden" name="quantity[]" value="${quantity}" data-product-id="${productId}">`;

                // Add event listener to remove button
                actionCell.querySelector('.remove-product').addEventListener('click', function() {
                    newRow.remove();
                    document.querySelector(`input[name="product_id[]"][value="${productId}"]`).remove();
                    document.querySelector(`input[name="quantity[]"][data-product-id="${productId}"]`).remove();
                });
            }

            // Clear the product select and quantity input for new entries
            productSelect.value = '';
            quantityInput.value = '';
        }
    });

    document.getElementById('submitOrder').addEventListener('click', function() {
        document.getElementById('orderForm').submit();
    });
</script>
@endsection
