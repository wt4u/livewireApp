<div wire:ignore.self class="modal fade" id="user-edit" tabindex="-1" role="diyalog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form autocomplete="off" wire:submit.prevent="update">
                <div class="card-body">
                    <div class="modal-header">
                        <h4 class="modal-title">


                            Kullanıcı Düzenle


                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">


                        <div class="mb-3">
                            <label for="name" class="form-label">İsim Soyisim</label>
                            <input wire:model.defer="state.name" id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   aria-describedby="emailHelp">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Eposta Adresi</label>
                            <input wire:model.defer="state.email" id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   aria-describedby="emailHelp">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Şifre</label>
                            <input wire:model.defer="state.password" id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirm" class="form-label">Şifre Onay</label>
                            <input wire:model.defer="state.password_confirmation" id="password_confirm" type="password"
                                   class="form-control @error('password_confirm') is-invalid @enderror">
                            @error('password_confirm')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-modal justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>

                        <button type="submit" class="btn btn-primary">Güncelle</button>

                    </div>
            </form>

        </div>


    </div>
    <!-- /.modal-content -->
</div>
</div>
