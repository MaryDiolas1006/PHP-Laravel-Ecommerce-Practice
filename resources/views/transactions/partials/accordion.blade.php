<div class="accordion" id="accordionExample">


@foreach($transactions as $transaction)
  {{-- transaction card start --}}
  
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$transaction->id}}" aria-expanded="true" aria-controls="collapseOne">
          {{$transaction->transaction_code}}
          <span class="badge badge-{{-- {{$transaction->status_id === 1 ? "success" && $transaction->status_id === 2 ? "info" : "danger"}} --}}">
            {{$transaction->status->name}}
          </span>
        </button>
      </h2>
    </div>

    <div id="collapse{{$transaction->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
        @include('transactions.partials.summary')
        <a href="{{route('transactions.show', $transaction->id)}}">View details</a>
      </div>
    </div>
  </div>
  {{-- transaction card start --}}
  @endforeach
</div>