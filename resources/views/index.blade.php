<x-example>
    <x-container>
        <ul>
            @foreach($examples as $example)
                <li>
                    <a href="{{route('Example',['template'=>str($example->getFilename())->replace(".blade.php","")])}}">
                        {{str($example->getFilename())->replace(".blade.php","")}}
                    </a>
                </li>
            @endforeach
        </ul>
    </x-container>
</x-example>
