@if(count($lostdocument) >0)
                    @foreach($lostdocument as $docs)
                 
                      <h6> {{$docs->documenttype}}</h6>
                      <h8> {{$docs->placeoflost}}</h6>
                      <h8> {{$docs->name}}</h8></br>
                      <small> Reported on {{$docs->created_at}}</small><hr>
                      
                    @endforeach
                    {{$lostdocument->links()}}
                  @else
                    <p> No lost items found</p>
                  @endif
             
