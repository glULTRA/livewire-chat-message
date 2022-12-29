<div>
    {{-- Stop trying to control. --}}

    <ul class="list-group w-75 mx-auto mt-3 container-fluid text-white">
        @foreach ($users as $user)
        <li class="list-group-item list-group-item-action mt-3 dark:bg-slate-800 dark:text-white" wire:click='checkconversation({{$user->id}})'>
            {{$user->name}}
        </li>
        @endforeach
    </ul>

</div>