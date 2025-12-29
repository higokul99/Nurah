@extends('layouts.admin')

@section('title', 'Attributes & Fragrance Notes')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Attributes & Fragrance Notes</h1>
            <p class="text-sm text-gray-500 mt-1">Manage olfactory families and scent notes for your perfumes.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- Families Column -->
        <div class="space-y-6">
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-800">Olfactory Families</h2>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-1 rounded">5 Families</span>
                </div>
                
                <!-- Add Form -->
                <div class="flex gap-2 mb-6">
                    <input type="text" placeholder="Add new family (e.g. Woody)" class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 text-sm">
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-900 transition-colors">Add</button>
                </div>

                <!-- List -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded border border-gray-100 group hover:border-gray-300 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
                            <span class="text-sm font-medium text-gray-700">Floral</span>
                        </div>
                        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button onclick="enableEdit(this)" class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded border border-gray-100 group hover:border-gray-300 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-amber-600"></span>
                            <span class="text-sm font-medium text-gray-700">Oriental (Amber)</span>
                        </div>
                        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button onclick="enableEdit(this)" class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded border border-gray-100 group hover:border-gray-300 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-green-700"></span>
                            <span class="text-sm font-medium text-gray-700">Woody</span>
                        </div>
                        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button onclick="enableEdit(this)" class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded border border-gray-100 group hover:border-gray-300 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                            <span class="text-sm font-medium text-gray-700">Fresh / Aquatic</span>
                        </div>
                        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button onclick="enableEdit(this)" class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                      <div class="flex items-center justify-between p-3 bg-gray-50 rounded border border-gray-100 group hover:border-gray-300 transition-colors">
                        <div class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-red-400"></span>
                            <span class="text-sm font-medium text-gray-700">Citrus</span>
                        </div>
                        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button onclick="enableEdit(this)" class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
                            <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notes Column -->
        <div class="space-y-6">
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-6">
                 <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-bold text-gray-800">Perfume Notes</h2>
                    <span class="bg-gray-100 text-gray-600 text-xs font-semibold px-2 py-1 rounded">12 Notes</span>
                </div>

                <!-- Add Form -->
                <div class="flex gap-2 mb-6">
                    <input type="text" placeholder="Add new note (e.g. Saffron)" class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 text-sm">
                    <button class="bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-800 transition-colors">Add</button>
                </div>

                <!-- List with Search -->
                <div class="mb-4 relative">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                    <input type="text" placeholder="Search notes..." class="w-full pl-8 px-3 py-1.5 border border-gray-200 rounded text-sm focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>

                <div class="space-y-1 max-h-[400px] overflow-y-auto pr-2 custom-scrollbar">
                    
                    @php
                    $notes = ['Rose', 'Oud', 'Saffron', 'Amber', 'Musk', 'Vanilla', 'Bergamot', 'Patchouli', 'Sandalwood', 'Jasmine', 'Leather', 'Black Pepper'];
                    @endphp

                    @foreach($notes as $note)
                    <div class="flex items-center justify-between px-3 py-2 hover:bg-gray-50 rounded group transition-colors">
                        <span class="text-sm text-gray-700">{{ $note }}</span>
                        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                             <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash text-xs"></i></button>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function enableEdit(btn) {
        const itemRow = btn.closest('.flex.items-center.justify-between');
        const textSpan = itemRow.querySelector('.text-sm.font-medium, .text-sm.text-gray-700');
        const currentText = textSpan.innerText;
        
        // Hide edit button, Show save button
        const actionDiv = btn.parentElement;
        actionDiv.innerHTML = `
            <button onclick="saveEdit(this)" class="text-green-600 hover:text-green-800"><i class="fas fa-check"></i></button>
            <button onclick="cancelEdit(this, '${currentText}')" class="text-gray-400 hover:text-red-600"><i class="fas fa-times"></i></button>
        `;
        
        // Replace text with input
        const input = document.createElement('input');
        input.type = 'text';
        input.value = currentText;
        input.className = 'w-full px-2 py-1 border border-gray-300 rounded text-sm focus:outline-none focus:ring-green-500 focus:border-green-500';
        
        textSpan.style.display = 'none';
        textSpan.parentElement.insertBefore(input, textSpan.nextSibling);
        input.focus();
    }

    function saveEdit(btn) {
        const itemRow = btn.closest('.flex.items-center.justify-between');
        const input = itemRow.querySelector('input');
        const newText = input.value;
        const textSpan = itemRow.querySelector('.text-sm.font-medium, .text-sm.text-gray-700');
        
        // Update text and show span
        textSpan.innerText = newText;
        textSpan.style.display = 'block';
        input.remove();
        
        // Restore buttons
        const actionDiv = btn.parentElement;
        actionDiv.innerHTML = `
            <button onclick="enableEdit(this)" class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
            <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
        `;
    }

    function cancelEdit(btn, originalText) {
        const itemRow = btn.closest('.flex.items-center.justify-between');
        const input = itemRow.querySelector('input');
        const textSpan = itemRow.querySelector('.text-sm.font-medium, .text-sm.text-gray-700');
        
        // Restore text and show span
        textSpan.style.display = 'block';
        input.remove();
        
        // Restore buttons
        const actionDiv = btn.parentElement;
        actionDiv.innerHTML = `
            <button onclick="enableEdit(this)" class="text-gray-400 hover:text-blue-600"><i class="fas fa-edit"></i></button>
            <button class="text-gray-400 hover:text-red-600"><i class="fas fa-trash"></i></button>
        `;
    }
</script>
@endsection
