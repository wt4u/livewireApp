
<x-modal id="user-edit" action="update" title="Kullanıcı Düzenle">

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
</x-modal>
