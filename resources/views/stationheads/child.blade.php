<option>Select</option>
@foreach($heads as $h)

<option value="{{$h->id}}">{{$h->title}}</option>

@endforeach