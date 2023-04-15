<x-base>
    <main class="px-3">

        <div class="px-4 py-5 my-5 text-center">

            <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72"
                height="57">

            <h1 class="display-5 fw-bold">Ciao, sono Francesco.</h1>

            <div class="col-lg-6 mx-auto">

                <p class="lead mb-4">
                    Sono un Web Developer, specializzato nel Backend.
                </p>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

                    <a href="{{ route('index') }}">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Guarda qualche mio
                            lavoro</button>
                    </a>

                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Sentiamoci per un
                        caff&egrave;</button>
                </div>

            </div>
        </div>

    </main>
</x-base>
