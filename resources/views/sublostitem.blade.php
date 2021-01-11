
                  <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>name</th>
                      <th>Item Lost</th>
                      <th>Place of lost</th>
                      <th>cnic</th>
                      <th>Contact#</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($lostdocument as $lostdoc)
                  <tr>
                      <td>{{$lostdoc->name}}</td>
                      <td>{{$lostdoc->documenttype}}</td>
                      <td>{{$lostdoc->placeoflost}}</td>
                      <td>{{$lostdoc->cnic}}</td>
                      <td>{{$lostdoc->contactno}}</td>
                    </tr>
                    @endforeach 
              
                  </tbody>
                </table>
              </div>