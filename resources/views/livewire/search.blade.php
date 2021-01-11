<div class="input-group">
    <input wire:model="search" name="search" type="text" list="mylist" class="form-control" placeholder="Search for..." />
    <span class="input-group-btn"><button class="btn btn-secondary" type="submit">Go!</button></span>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($contentlist as $rs)
                <option value="{{ $rs->title }}">{{ $rs->menu->title }}</option>
            @endforeach
        </datalist>
    @endif
</div>
