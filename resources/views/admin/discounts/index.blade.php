@extends('layouts.admin')

@section('title', 'Discounts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-dark">Discounts</h1>
    <a href="{{ route('admin.discounts.create') }}" class="btn btn-success shadow-sm">Create discount</a>
</div>

<!-- Stats -->
<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <div class="card border shadow-sm p-3 text-center">
            <div class="h3 fw-bold text-dark mb-0">2</div>
            <div class="small text-muted text-uppercase tracking-wide mt-1">Total</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border shadow-sm p-3 text-center">
            <div class="h3 fw-bold text-success mb-0">2</div>
            <div class="small text-muted text-uppercase tracking-wide mt-1">Active</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border shadow-sm p-3 text-center">
            <div class="h3 fw-bold text-secondary opacity-50 mb-0">0</div>
            <div class="small text-muted text-uppercase tracking-wide mt-1">Expired</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="card border shadow-sm p-3 text-center">
            <div class="h3 fw-bold text-secondary opacity-50 mb-0">0</div>
            <div class="small text-muted text-uppercase tracking-wide mt-1">Inactive</div>
        </div>
    </div>
</div>

<div class="card border shadow-sm mb-4">
    <!-- Toolbar -->
    <div class="card-header bg-light border-bottom p-3 d-flex gap-3">
        <div class="flex-grow-1">
             <div class="input-group input-group-sm">
                 <span class="input-group-text bg-white border-end-0 text-muted"><i class="fas fa-search"></i></span>
                 <input type="text" placeholder="Search discounts" class="form-control border-start-0 shadow-none">
             </div>
        </div>
        <button class="btn btn-white border btn-sm shadow-sm text-secondary">
            <i class="fas fa-filter me-2"></i> Filter
        </button>
        <button class="btn btn-white border btn-sm shadow-sm text-secondary">
            <i class="fas fa-sort me-2"></i> Sort
        </button>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0 text-secondary">
            <thead class="bg-light text-uppercase small fw-medium text-muted">
                <tr>
                    <th class="px-3 py-3" style="width: 50px;"><div class="form-check"><input type="checkbox" class="form-check-input"></div></th>
                    <th class="px-3 py-3">Discount code</th>
                    <th class="px-3 py-3">Status</th>
                    <th class="px-3 py-3">Discount</th>
                    <th class="px-3 py-3">Valid Period</th>
                    <th class="px-3 py-3 text-end">Used</th>
                    <th class="px-3 py-3 text-end">Actions</th>
                </tr>
            </thead>
            <tbody class="border-top-0">
                @forelse($discounts as $discount)
                <tr class="cursor-pointer" onclick="window.location='{{ route('admin.discounts.edit', $discount->id) }}'">
                    <td class="px-3 py-3" onclick="event.stopPropagation()"><div class="form-check"><input type="checkbox" class="form-check-input" value="{{ $discount->id }}"></div></td>
                    <td class="px-3 py-3">
                        <div class="d-flex flex-column">
                            <span class="fw-bold text-dark">{{ $discount->code }}</span>
                            <span class="small text-muted">
                                @if($discount->products->count() > 0)
                                    {{ $discount->products->first()->title }} 
                                    @if($discount->products->count() > 1) 
                                        + {{ $discount->products->count() - 1 }} more 
                                    @endif
                                @else
                                    All Products
                                @endif
                            </span>
                        </div>
                    </td>
                    <td class="px-3 py-3">
                        <span class="badge {{ $discount->status == 'active' ? 'bg-success bg-opacity-10 text-success' : 'bg-secondary bg-opacity-10 text-secondary' }} rounded-pill px-2 py-1 fw-medium">
                            {{ ucfirst($discount->status) }}
                        </span>
                    </td>
                    <td class="px-3 py-3 text-dark">
                        {{ $discount->value }}{{ $discount->type == 'percentage' ? '%' : ' AED' }} off
                    </td>
                    <td class="px-3 py-3 text-muted small">
                        {{ $discount->starts_at->format('M d, Y') }} 
                        @if($discount->ends_at)
                            - {{ $discount->ends_at->format('M d, Y') }}
                        @endif
                    </td>
                    <td class="px-3 py-3 text-end">
                        {{ $discount->uses_count }}
                    </td>
                    <td class="px-3 py-3 text-end">
                        <div class="d-flex justify-content-end gap-2" onclick="event.stopPropagation()">
                             <a href="{{ route('admin.discounts.edit', $discount->id) }}" class="btn btn-white btn-sm border-0 text-secondary hover-text-primary p-1"><i class="fas fa-edit"></i></a>
                             
                             <form action="{{ route('admin.discounts.destroy', $discount->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this discount?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-white btn-sm border-0 text-secondary hover-text-danger p-1"><i class="fas fa-trash"></i></button>
                             </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-5 text-muted">No discounts found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="px-3 py-3">
            {{ $discounts->links() }}
        </div>
    </div>
</div>
<style>
    .hover-text-primary:hover { color: var(--bs-primary) !important; }
    .hover-text-danger:hover { color: var(--bs-danger) !important; }
</style>


@endsection
