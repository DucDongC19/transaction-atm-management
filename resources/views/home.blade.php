@extends('layout.main')
@section('content')
    <main class="pt-16 w-full h-full flex">
        <div id="sidebar" class="w-[5%] border left transition-all duration-500">
            @component('components.sidebar')
            @endcomponent
        </div>
        <div id="divMap" class="w-[95%] transition-all duration-500">
            @component('components.map')
            @endcomponent
        </div>
        <div id="addBankLocation" class="">
            @component('components.addBankLocation')
            @endcomponent
        </div>
        <div id="addTransactionLocation" class="">
            @component('components.addTransactionLocation')
            @endcomponent
        </div>
    </main>
@endsection


