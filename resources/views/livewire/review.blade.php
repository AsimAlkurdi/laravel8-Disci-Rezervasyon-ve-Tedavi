<div>
    @if (\Session::has('success'))
        <div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong>  <p>{{ \Session::get('success') }}</p>
        </div>
        <br />
        <br />
    @endif
    <form class="callus" wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control" wire:model="subject" type="text" required placeholder="Subject" required>
                 @error('subject') <span class="text-danger">{{$message}} </span>@enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <textarea wire:model="comment" placeholder="Comment"></textarea>
                    @error('comment') <span class="text-danger">{{$message}} </span>@enderror

                </div>
                @auth
                <div class="form-group">
                    <button type="submit" class="btn-submit button3" value="Save">Submit Request</button>
                </div>
                @else
                    <div class="form-group">
                        <a href="\login" class="btn-submit button3" >For Submit  Review Login</a>
                    </div>
                @endauth
            </div>
        </div>
    </form>
</div>
