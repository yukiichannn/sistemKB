<div>
    <livewire:dosen-create></livewire:dosen-create>
    <livewire:dosen-edit></livewire:dosen-edit>
    <div class="card card-success card-outline">
        <div class="card-header row justify-content-between align-items-center">
            {{-- <a href="{{route('dosen.create')}}" class="col-2 btn btn-primary bg-gradient-blue">Data Baru</a> --}}
            <button style="width: 100px;" class="col btn btn-primary bg-gradient-blue" type="button" data-toggle="modal" data-target="#modal-create">Tambah <i class="fas fa-plus-square"></i></button>
            <div class="card-tools col-10 d-flex justify-content-end">
                <div class="input-group input-group-sm" style="width: 50%;">
                    <input wire:model="search" type="text" name="search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-2" style="max-height: 800px; overflow-y: scroll;">
        <table class="table table-hover table-bordered table-striped text-nowrap">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Pasien</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Dokter</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dosen as $index)
                    <tr>
                        <td>{{ $index->id }}</td>
                        <td>{{ $index->nama }}</td>
                        <td>{{ $index->noTelp }}</td>
                        <td>{{ $index->address }}</td>
                        <td>{{ $index->dokter }}</td>
                        <td>
                            <button wire:click="edit({{ $index->id }})" class="btn btn-warning btn-sm">Edit</button>
                            <button wire:click="delete({{ $index->id }})" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer justify-content-between d-flex">
            @if (isset($dosen))
                <div class="col">
                    <div class="row">
                        <div class="col">
                            {{ $dosen->links() }}
                        </div>

                    </div>
                </div>
                <select wire:model="paginateNumber" class="form-control col-1" name="total" id="">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="0">Semua Data</option>
                </select>
            @endif
        </div>
    </div>
</div>

<x-slot:sweetalert>

</x-slot:sweetalert>


