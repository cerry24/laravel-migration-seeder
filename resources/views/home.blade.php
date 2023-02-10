<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container pt-5">
            <div class="row gy-5">
                @forelse ($trains as $train)
                <div class="col-4">
                    <article class="card p-3">
                        <h4 class="fw-bold">Codice treno:  {{$train->codice_treno}}</h4>
                        <span>dell'azienda: {{$train->azienda}}</span>
                        <p>Partito da: {{$train->stazione_di_partenza}} e in arrivo a: {{$train->stazione_di_arrivo}}</p>
                        <p>Partito alle ore: {{$train->orario_di_partenza}} e in arrivo alle ore: {{$train->orario_di_arrivo}}</p>
                    </article>
                </div>
                @empty
                    <p>Non ci sono treni nella data odierna</p>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>