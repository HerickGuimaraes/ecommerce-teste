@if(isset($lista))
    <div class="row">
    @foreach($lista as $prod)
        <div class="col-3 mb-3 d-flex aling-item-stretch">
             <div class="card">
                <img src="{{ $prod->foto }}" class="card-img-top">
                <div class="car-body px-3 mt-2">
                    <h6 class="car-title ">{{$prod->nome}} - R${{$prod->valor}}</h6>
                    <a href="{{ route('adc_carrinho', ['idproduto' => $prod->id]) }}" class="btn btn-sm btn-secondary px-3 mb-3">Adicionar item</a>
                </div>
            </div>
          </div>
    @endforeach
    </div>
@endif