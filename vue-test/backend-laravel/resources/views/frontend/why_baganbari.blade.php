<div class="section section-padding parallax-bg"
    style="background-image: url('{{ $whyBaganbariHead->b_photo }}'); background-size: cover;">
    <div class="container container-pad">
        <div class="why-head">
            <span class="services__title">{{ $whyBaganbariHead->title }}</span>
            <span id="scroll-trigger-baganbari" style="margin-bottom: 20px">
                <img width="150px" src="{{ $whybaganbariLeaf->photo ?? '' }}" alt="Your Image" />
            </span>
        </div>
        <div class="why-description">
            {!! $whyBaganbariHead->description !!}

        </div>
        <div class="row">
            @foreach ($whyBaganbariCard as $whyBaganbariCards)
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <div class="card why-card">
                        <div class="card-body text-center">
                            <img class="why-card-img" src="{{ $whyBaganbariCards->photo }}" alt="Card image cap">
                            <h5 class=" why-card-title">{{ $whyBaganbariCards->head }}</h5>
                            <div class="card-text why-card-description">
                                {!! $whyBaganbariCards->card_description !!}
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
