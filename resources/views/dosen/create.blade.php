<x-layout>
    <x-slot:title>Pasien Baru</x-slot:title>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Pasien Baru</h3>
            </div>
            <div class="card-body">
                <form action="{{route('dosen.store')}}" method="post">
                @csrf
                <div class="form-group">
                                <label for="nama">Nama</label>
                                <input wire:model="nama" required class="form-control" type="text" name="nama" placeholder="Nama lengkap dengan gelar">
                                @error('nama')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nomor Telepon</label>
                                <input wire:model="nip" required class="form-control" type="text" name="Nomor Telepon" placeholder="Nomor Telepon">
                                @error('nomor telepon')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <input wire:model="address" required class="form-control" type="text" name="address" placeholder="address">
                                @error('address')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama">Dokter</label>
                                <input wire:model="Dokter" required class="form-control" type="text" name="Dokter" placeholder="Dokter">
                                @error('Dokter')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Dosis">Dosis</label>
                                <input wire:model="Dosis" required class="form-control" type="text" name="Dosis" placeholder="Dosis">
                                @error('nip')
                                    <code>{{$message}}</code>
                                @enderror
                            </div>
                    <button type="submit" class="mt-2 btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
