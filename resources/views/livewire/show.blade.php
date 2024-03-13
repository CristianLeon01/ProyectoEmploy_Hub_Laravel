<div>
    <select class="occupation" name="occupation_id" id="" wire:model="occupationId" wire:change="actualizarCargos">
        @foreach ($occupations as $occupation)
        <option value="{{ $occupation->id }}">{{ $occupation->occupation_name }}</option>    
        @endforeach
    </select>

    <ul>
        @if($posts)
            @foreach($posts as $post)
                <li>{{ $post->name_post }}</li>
                <li>{{ $post->description }}</li>
            @endforeach
        @endif
    </ul>
</div>