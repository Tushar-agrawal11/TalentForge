<h1>{{$heading}}</h1>

@unless (count($documents)==0)
@foreach($documents as $document) 
    <li><a href="{{ url('/documents/' . $document->id ) }}">{{ $document->name }}</a></li>
@endforeach
@else
    <p>No books found</p>
@endunless