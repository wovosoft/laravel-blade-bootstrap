<x-example>
    <x-container>
        <h3>Default Card</h3>
        <x-card>
            A card is a flexible and extensible content container. It includes options for headers and footers, a wide
            variety of content, contextual background colors, and powerful display options. If you’re familiar with
            Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components
            is available as modifier classes for cards.
        </x-card>

        <h3>Card Header , Footer & Title</h3>
        <x-card header="Card Header" footer="Card Footer" title="Card Title">
            A card is a flexible and extensible content container. It includes options for headers and footers, a wide
            variety of content, contextual background colors, and powerful display options. If you’re familiar with
            Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components
            is available as modifier classes for cards.
            <x-card-text>
                CARD TEXT: A card is a flexible and extensible content container.
            </x-card-text>
        </x-card>

        <h3>Card Image by Default at Top</h3>
        <x-card style="max-width: 400px" image="https://picsum.photos/400/200" image-top>
            A card is a flexible and extensible content container. It includes options for headers and footers, a wide
            variety of content, contextual background colors, and powerful display options. If you’re familiar with
            Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components
            is available as modifier classes for cards.
        </x-card>
        <h3>Card Image at Bottom</h3>
        <x-card style="max-width: 400px" image="https://picsum.photos/400/200" image-bottom>
            A card is a flexible and extensible content container. It includes options for headers and footers, a wide
            variety of content, contextual background colors, and powerful display options. If you’re familiar with
            Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components
            is available as modifier classes for cards.
        </x-card>

        <h3>Card Image Overlay</h3>
        <x-card style="max-width: 400px" image="https://picsum.photos/400/200">
            <x-slot:overlay class="bal falite aicho" id="bal">
                A card is a flexible and extensible content container. It includes options for headers and footers, a
                wide
                variety of content, contextual background colors, and powerful display options. If you’re familiar with
                Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those
                components
                is available as modifier classes for cards.
            </x-slot:overlay>
        </x-card>

        <h3>Color Variants</h3>
        @foreach(['primary','secondary','waring','light'] as $variant)
            <x-card :variant="$variant" class="mb-3" :header="str($variant)->title().' Color Variant'">
                A card is a flexible and extensible content container. It includes options for headers and footers, a
                wide
                variety of content, contextual background colors, and powerful display options. If you’re familiar with
                Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those
                components
                is available as modifier classes for cards.
            </x-card>
        @endforeach

        <h3>Border Variants</h3>
        @foreach(['primary','secondary','waring','light'] as $variant)
            <x-card :border-variant="$variant" class="mb-3" :header="str($variant)->title().' Color Variant'">
                A card is a flexible and extensible content container. It includes options for headers and footers, a
                wide
                variety of content, contextual background colors, and powerful display options. If you’re familiar with
                Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those
                components
                is available as modifier classes for cards.
            </x-card>
        @endforeach
    </x-container>
</x-example>
