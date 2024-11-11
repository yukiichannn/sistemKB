<div>
    <form wire:submit.prevent="create">
            <div class="form-group">
                <label for="idPasien">Pasien</label>
                <select required wire:model="idPasien" class="form-select" name="idPasien">
                    <option readonly selected>Pilih Pasien</option>
                    @foreach($dosen as $pasien)
                        <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                    @endforeach
                </select>
                @error('idPasien')
                    <code>{{$message}}</code>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Alamat</label>
                <input wire:change="resetDosen" wire:model.lazy="tahun" value="{{old('tahun')}}" required class="form-control" type="text" name="tahun" placeholder="Tahun Perkuliahan">
                @error('tahun')
                    <code>{{$message}}</code>
                @enderror
            </div>
            <div class="form-group">
                <label for="matkul">Hari</label>
                <select required  wire:change="resetDosen" wire:model="hari" class="form-select" name="hari" id="">
                    <option readonly selected >Pilih Hari</option>
                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                    <option value="jumat">Jumat</option>
                    <option value="sabtu">Sabtu</option>
                </select>
                @error('hari')
                    <code>{{$message}}</code>
                @enderror
            </div>
            <div class="form-group mt-0 mb-3 border rounded p-3">
                <label for="waktu">Waktu Dimulai</label>
                <input required
                @if (!$cekWaktu)
                disabled = ''
                @endif
                wire:change="resetDosen" wire:model="waktu" value="{{old('waktu')}}" class="form-control-sm" type="time" name="waktu" id="">

                <label for="waktu">Waktu Berakhir</label>
                <input
                required
                @if (!$cekWaktu)
                disabled = ''
                @endif
                wire:model="berakhir" wire:change="timeSelected" value="{{old('berakhir')}}" class="form-control-sm" type="time" name="berakhir" id="">
                <br>
                @if ($message == 'available')
                    <p class="text-success">Ruangan Dapat Digunakan!</p>
                @elseif ($message == 'time-error')
                    <code>Waktu yang dipilih Tidak Valid</code>
                @elseif($message == 'not-available')
                    <p class="text-danger mb-0">Ruangan Tidak Dapat Digunakan! detil :</p>
                @endif

                @error('waktu')
                    <code>{{$message}}</code>
                @enderror
                @error('berakhir')
                    <code>{{$message}}</code>
                @enderror

                @if ($ruanganDipakai != null)
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>Nama Dosen</th>
                                <th>Matakuliah</th>
                                <th>Semester</th>
                                <th>Kelas</th>
                                <th>Hari</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$ruanganDipakai['dosen']->nama}}</td>
                                    <td>{{$ruanganDipakai['matakuliah']->nama}}</td>
                                    <td>{{$ruanganDipakai['perkuliahan']->semester}}</td>
                                    <td>{{$ruanganDipakai['perkuliahan']->kelas}}</td>
                                    <td>{{$ruanganDipakai['perkuliahan']->hari}}</td>
                                    <td>{{$ruanganDipakai['perkuliahan']->waktu}}</td>
                                    <td>{{$ruanganDipakai['perkuliahan']->berakhir}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="matkul">Dokter</label>
                <select required  wire:change="resetDosen" wire:model="hari" class="form-select" name="hari" id="">
                    <option readonly selected >Pilih Dokter</option>
                    <option value="senin">yunan</option>
                    <option value="selasa">yukiii</option>
                </select>
                @error('hari')
                    <code>{{$message}}</code>
                @enderror
            </div>
            <div class="form-group">
                <label for="matkul">Dosis</label>
                <select required  wire:change="resetDosen" wire:model="hari" class="form-select" name="hari" id="">
                    <option readonly selected >Pilih Dosisi</option>
                    <option value="senin">A</option>
                    <option value="selasa">B</option>
                    <option value="rabu">C</option>
                </select>
                @error('hari')
                    <code>{{$message}}</code>
                @enderror
            </div>
            <button
            @if (!$cekRuangan)
                disabled = ''
            @endif
            type="submit" class="mt-2 btn btn-success">Simpan</button>
        </form>
</div>
