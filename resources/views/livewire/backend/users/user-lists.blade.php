@section('page','Üye İşlemleri')

<div class="container-fluid">

    {{--    @if (session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-check-circle"></i>
                <strong class="mr-3">Tebrikler!</strong> {{ session('message') }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif--}}

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                    <div class="d-flex justify-content-end">
                        <button wire:click.prevent="create" class="btn btn-outline-primary btn-sm ">Yeni Ekle</button>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Ad Soyad</th>
                            <th>EPosta Adresi</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($users as $user)

                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    <a href="" wire:click.prevent="edit({{ $user }})"
                                       class="btn btn-outline-primary btn-xs">Düzenle</a>
                                    <a href="" wire:click.prevent="destroyID({{ $user->id }})"
                                       class="btn btn-outline-danger btn-xs">Sil</a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $users->links() }}
                    </ul>
                </div>
            </div>
        </div>

    </div>
    @include('livewire.backend.users.user-create')
    @include('livewire.backend.users.user-edit')

    <div wire:ignore.self class="modal fade" id="user-delete" tabindex="-1" role="diyalog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Kullanı Silme İşlemi
                </div>
                <div class="modal-body">
                    <h3>Silmek istediğine emin misin?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">İptal</button>
                    <button type="button" wire:click.prevent="destroy" class="btn btn-primary">Evet, Sil</button>
                </div>


            </div>


        </div>
        <!-- /.modal-content -->
    </div>
</div>


</div>

