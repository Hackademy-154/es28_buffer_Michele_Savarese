<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white py-3">
                    Contattaci
                </h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('contact.submit')}}" method="POST" class="p-5 rounded shadow bg-secondary-subtle">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo:</label>
                        <input type="text" id="name" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Mail:</label>
                        <input type="email" id="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Il tuo messaggio:</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="5" name="message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success">Invia</button>
                    </div>
                </form>


            </div>
        </div>

    </div>

</x-layout>
