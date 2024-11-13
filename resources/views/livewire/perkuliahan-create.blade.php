<div>
    <form wire:submit.prevent="create">

            <div class="form-group">
                <label for="idPasien">Pasien</label>
                <select class="form-select custom-select" name="idPasien">
                    <option readonly selected>Pilih Pasien</option>
                    @foreach($dosen as $pasien)
                        <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                    @endforeach
                </select>
                @error('idPasien')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggalKb">Tanggal KB</label>
                <input value="{{old('tanggalKb')}}" required class="form-control" type="date" name="tanggalKb" placeholder="Tanggal KB">
                @error('tanggalKb')
                    <code>{{$message}}</code>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggalPengingat">Tanggal Pengingat</label>
                <input value="{{old('tanggalPengingat')}}" required class="form-control" type="date" name="tanggalPengingat" placeholder="Tanggal Pengingat">
                @error('tanggalPengingat')
                    <code>{{$message}}</code>
                @enderror
            </div>
            <div class="form-group">
                <label for="pengingatVia">Pengingat Via</label>
                <select required class="form-select custom-select" name="pengingatVia">
                    <option readonly selected>Pilih Metode Pengingat</option>
                    <option value="sms">📱 SMS</option>
                    <option value="whatsapp">💬 WhatsApp</option>
                </select>
                @error('pengingatVia')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggalKbBerikutnya">Tanggal KB Berikutnya</label>
                <input value="{{old('tanggalKbBerikutnya')}}" required class="form-control" type="date" name="tanggalKbBerikutnya" placeholder="Tanggal KB Berikutnya">
                @error('tanggalKbBerikutnya')
                    <code>{{$message}}</code>
                @enderror
            </div>
            <a href="{{ route('perkuliahan.store') }}" class="mt-2 btn btn-primary">Submit</a>
        </form>
</div>
