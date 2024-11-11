<div>
    {{-- The whole world belongs to you. --}}
    <div class="modal fade" id="modal-create" wire:ignore.self>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Data Pasien</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="store">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input wire:model="nama" required class="form-control" type="text" name="nama" placeholder="Nama lengkap dengan gelar">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nomor Telepon</label>
                                <input wire:model="noTelp" required class="form-control" type="text" name="noTelp" placeholder="noTelp">
                            </div>
                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <input wire:model="alamat" required class="form-control" type="text" name="alamat" placeholder="alamat">
                            </div>

                            <div class="form-group">
                                <label for="nama">Dokter</label>
                                <input wire:model="dokter" required class="form-control" type="text" name="dokter" placeholder="dokter">
                            </div>

                            <div class="form-group">
                                <label for="Dosis">Dosis</label>
                                <input wire:model="dosis" required class="form-control" type="text" name="dosis" placeholder="dosis">
                            </div>
                            <h2>{{$dismissState}}</h2>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <div class="btn-group">
                                    <button type="submit" wire:click="$set('dismissState', false)" class="btn btn-info">Simpan dan Tambah Lagi</button>
                                    <button type="submit" wire:click="$set('dismissState', true)" class="btn btn-primary">Simpan</button>

                                </div>
                            </div>
                        </form>
                    </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
