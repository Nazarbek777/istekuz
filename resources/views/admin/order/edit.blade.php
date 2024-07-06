<x-layouts.admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('order.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="yangi" {{ $order->status == 'yangi' ? 'selected' : '' }}>Yangi</option>
                            <option value="eski" {{ $order->status == 'eski' ? 'selected' : '' }}>Eski</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
