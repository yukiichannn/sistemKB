<x-layout>
    <x-slot:title>Perkuliahan Baru</x-slot:title>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Pasien</h3>
                @if (Session::has('error'))
                    <code>{{ Session::get('error') }}</code>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('perkuliahan.store') }}" method="post">
                    @csrf
                    <div class="form-group
                        @error('nama') has-error @enderror">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
                        @error('nama')
                            <span class="help-block
                                text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-slot:livewire>@livewireScripts</x-slot:livewire>
</x-layout>
