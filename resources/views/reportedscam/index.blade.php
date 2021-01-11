  <marquee direction="up" , scrollamount="2 " onmouseover="this.stop();", onmouseout="this.start();" > 
  @if(count($scam) >0)
                    @foreach($scam as $scams)
                 
                      <h6><a href="/reportedscam/{{$scams->id}}"> {{$scams->scamcategory}}</a></h6>
                      <h8> {{$scams->scamstory}}</h8><br>
                      <small> Reported on {{$scams->created_at}}</small><hr>
                    @endforeach
                    {{$scam->links()}}
                  @else
                    <p> No scams found</p>
                  @endif
  </marquee>
  
             
