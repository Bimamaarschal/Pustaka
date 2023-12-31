<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tulis Blog') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-tulis.create />
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.content').ckeditor();
    });
    </script>
</x-app-layout>