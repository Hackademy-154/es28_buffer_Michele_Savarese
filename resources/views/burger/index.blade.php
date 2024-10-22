<x-layout>
    <x-navbar>
    </x-navbar>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="row pt-5">
                    @foreach ($burgers as $burger)
                    <div class="col-12 col-md-3 d-flex justify-content-center">
                        <x-card dataId="{{$burger['id'] }}"
                        name="{{$burger['name']}}"
                        type="{{$burger['type']}}"
                        price="{{$burger['price']}}"
                        img="{{$burger['img']}}">
                        </x-card>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
