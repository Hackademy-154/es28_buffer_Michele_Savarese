<x-layout>
    <x-navbar>
    </x-navbar>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1>
                    Dettaglio Burger: {{$burger['name']}}
                </h1>
            </div>

                <div class="row pt-5">
                    <div class="col-12 col-md-3 d-flex justify-content-center">
                        <x-card dataId="{{$burger['id'] }}"
                        name="{{$burger['name']}}"
                        type="{{$burger['type']}}"
                        price="{{$burger['price']}}"
                        img="{{$burger['img']}}">
                        </x-card>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
