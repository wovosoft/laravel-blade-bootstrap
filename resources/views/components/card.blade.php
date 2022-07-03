@props([
    "overlay"
])

<div {{$getAttributes()}}>
    @if($header)
        <x-card-header>
            {{$header}}
        </x-card-header>
    @endif

    @if($image && !$imageBottom)
        <x-card-image
            :src="$image"
            :bottom="!!$imageBottom"
        />
    @endif

    @if(isset($overlay) && $overlay)
        <?php
        /**
         * slot attributes throwing error, don't know why
         * $overlay->attributes
         **/
        ?>
        <x-card-image-overlay>
            {{$overlay}}
        </x-card-image-overlay>
    @endif

    @if(!$noBody)
        <x-card-body>
            @if($title)
                <x-card-title>
                    {{$title}}
                </x-card-title>
            @endif
            {{$slot}}
        </x-card-body>
    @else
        {{$slot}}
    @endif


    @if($image && !!$imageBottom)
        <x-card-image
            :src="$image"
            :bottom="!!$imageBottom"
        />
    @endif

    @if($footer)
        <x-card-footer>
            {{$footer}}
        </x-card-footer>
    @endif
</div>
