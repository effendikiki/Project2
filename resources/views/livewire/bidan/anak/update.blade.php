<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div wire:ignore class="form-group">
                        <label for="nama_ibu">Nama Ibu</label><br>
                        <select class="form-control" wire:model="id_ibu">
                            @foreach($ibu as $item)
                            <option selected value="{{ $item->id }}"> {{ $item->nama }} </option>
                            @endforeach()
                        </select>
                        @error('id_ibu') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama" wire:model="nama">
                        @error('nama') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Kelamin</label>
                        <select type="text" class="form-control" wire:model="jenis_kelamin">
                            <option value="" disabled selected>Select your option</option>
                            @foreach ($jk as $gender)
                            <option value="{{ $gender }}" selected>{{ $gender }}</option>
                            @endforeach
                        </select>
                        @error('jenis_kelamin') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleFormControlInput3" wire:model="tgl_lahir">
                        @error('tgl_lahir') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary lg:mr-2" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>