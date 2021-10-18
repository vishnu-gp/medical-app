<x-livewire-tables::table.cell>
    {{$row->id}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{$row->name}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{$row->email}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{$row->latest_bp}}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    <a href="{{ route('bp_log', ['patient_id' => $row->id]) }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Record BP
        </button>
    </a>
</x-livewire-tables::table.cell>