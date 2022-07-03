<div {{$getAttributes()}}>
    {{$slot}}
    @if($dismissible)
        <x-button-close/>
    @endif
</div>
