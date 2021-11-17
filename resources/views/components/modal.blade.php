<div wire:ignore.self class="modal fade" id="{{ $id }}" tabindex="-1" role="diyalog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form autocomplete="off" wire:submit.prevent="{{ $action }}">
                <div class="card-body">

                    <div class="modal-header">
                        <h4 class="modal-title">
                            {{ $title }}
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        {{ $slot }}
                    </div>

                    <div class="card-modal justify-content-between">
                        <x-btn/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


