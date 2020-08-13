<div class="accordion" id="accordionExample">

  {{-- transaction card start --}}
  
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{-- {{$transaction->transaction_code}} --}}
          <span class="badge badge-primary">
            {{-- {{$transaction->status_id}} --}}
          </span>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
        @include('transactions.partials.summary')
        <a href="{{-- {{route('transactions.show', $transaction->id)}} --}}">View details</a>
      </div>
    </div>
  </div>
  {{-- transaction card start --}}
</div>