<x-example>
    <x-container>
        <x-alert size="d">
            Default Alert
        </x-alert>

        <h3>Alert Link</h3>
        <x-alert>
            This is alert with
            <x-alert-link>This alert link</x-alert-link>
        </x-alert>

        <h3>Alert Heading</h3>
        <x-alert variant="success">
            <x-alert-heading>Alert Heading</x-alert-heading>
            <hr/>
            Alert Contents
        </x-alert>

        <h3>Alert Dismissible</h3>
        <x-alert variant="success" dismissible>
            <x-alert-heading>Alert Heading</x-alert-heading>
            <hr/>
            Alert Contents
        </x-alert>
    </x-container>
</x-example>
