@foreach ($products as $item)
<div class="cardBox">
  <div class="card">
    <div class="front">
        <p>{{ $item->id }}</p>
      <p>{{ $item->head }}</p>
      <p>{{ $item->desc }}</p>
     
     <a href="/delete/{{$item->id}}"><p>delete</p></a>
      
    </div>
   
  </div>
</div>
@endforeach