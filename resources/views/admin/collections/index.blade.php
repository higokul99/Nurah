@extends('layouts.admin')

@section('title', 'Collections')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">
    <h1 class="h3 mb-0 text-dark">Collections</h1>
    <a href="{{ route('admin.collections.create') }}" class="btn btn-success shadow-sm fw-medium">Create collection</a>
</div>

<div class="card border shadow-sm container-fluid p-0 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0 text-start">
            <thead class="bg-light text-secondary small text-uppercase fw-medium">
                 <tr>
                    <th class="px-4 py-3" style="width: 50px;">
                        <input class="form-check-input" type="checkbox">
                    </th>
                    <th class="px-4 py-3 border-bottom">Title</th>
                    <th class="px-4 py-3 border-bottom">Products</th>
                    <th class="px-4 py-3 border-bottom">Conditions</th>
                    <th class="px-4 py-3 border-bottom" style="width: 100px;"></th>
                 </tr>
            </thead>
            <tbody class="divide-y">
                @forelse($collections as $collection)
                <tr class="cursor-pointer group">
                    <td class="px-4 py-3" onclick="event.stopPropagation()">
                        <input class="form-check-input" type="checkbox" value="{{ $collection->id }}">
                    </td>
                    <td class="px-4 py-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded border flex-shrink-0 overflow-hidden" style="width: 40px; height: 40px;">
                                @if($collection->image)
                                    <img src="{{ Storage::url($collection->image) }}" alt="{{ $collection->name }}" class="w-100 h-100 object-fit-cover">
                                @else
                                    <i class="fas fa-image text-secondary opacity-50"></i>
                                @endif
                            </div>
                            <a href="{{ route('admin.collections.edit', $collection->id) }}" class="fw-medium text-dark text-decoration-underline-hover">{{ $collection->name }}</a>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-secondary">0 products</td> {{-- Update when product relation exists --}}
                    <td class="px-4 py-3">
                        <span class="badge {{ $collection->status ? 'bg-success-subtle text-success' : 'bg-secondary-subtle text-secondary' }}">
                            {{ $collection->status ? 'Active' : 'Draft' }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-end">
                        <div class="d-flex justify-content-end gap-2" onclick="event.stopPropagation()">
                            <a href="{{ route('admin.collections.edit', $collection->id) }}" class="btn btn-sm btn-white border shadow-sm text-secondary hover-text-primary"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.collections.destroy', $collection->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-white border shadow-sm text-secondary hover-text-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">No collections found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<style>
    .text-decoration-underline-hover:hover { text-decoration: underline !important; }
    .hover-text-primary:hover { color: var(--bs-primary) !important; }
    .hover-text-danger:hover { color: var(--bs-danger) !important; }
    .cursor-pointer { cursor: pointer; }
</style>
@endsection
