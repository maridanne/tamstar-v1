<x-app-web-layout>
    <x-slot:title>
        DOT Reg 8 TAMSTAR
    </x-slot>
    <div class="py-5">
        <div class="container">

            @php
                $successMsg = "Saved Successfully";
                $type = "danger";
                
            @endphp
            <x-alert-message :type="$type" :message="$successMsg" class="py-5"/>
            <hr>
            <h4>Välkommen på Index Page</h4>
            <hr>
            <x-form.label value="First Name"/>
            <!-- <x-form.label>

            </x-form.label> -->
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            alert('This is the script area.');
        </script>
    </x-slot>
</x-app-web-layout>