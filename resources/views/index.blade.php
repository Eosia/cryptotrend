@extends('layouts.main')


@section('content')

    <div class="container-fluid mx-auto">
        <div class="row mt-5 mx-auto">

            <!--boucle des cryptos-->
            @foreach($response as $currency)
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-11 col-12 text-center mb-3 mx-auto">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ $currency['logo_url'] }}" alt="{{ $currency['currency'] }}" class="img-fluid mx-auto mt-3" style="width: 75px; margin: 10px auto;">
                        <div class="card-body">
                            <div class="card-title">
                                {{ $currency['currency'] }}
                            </div>
                            <div class="card-text m-2">
                                Prix : {{ $currency['price'] }} <span class="text-danger h5">€</span>
                            </div>
                            <div class="card-text mt-1">
                                Nombre actif : {{ $currency['circulating_supply'] }}
                            </div>
                            <div class="card-text mt-1">
                                Capitalisation : {{ $currency['market_cap'] }}
                            </div>
                            <div class="card-text mt-1">
                                Nom : {{ $currency['name'] }}
                            </div>

                            <!-- en baisse ou en augmentation-->
                            @if($currency['7d']['price_change_pct'] > 0)
                                <div class="card-text mt-1 text-success h6">
                                    Change : {{ $currency['7d'] ['price_change_pct']}}
                                </div>
                            @else
                                <div class="card-text mt-1 text-danger h6">
                                    Change : {{ $currency['7d'] ['price_change_pct']}}
                                </div>
                            @endif



                        </div>
                    </div>
                </div>
            @endforeach
            <!--boucle des cryptos/-->

        </div>
    </div>

@endsection
