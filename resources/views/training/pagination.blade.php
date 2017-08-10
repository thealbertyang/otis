                <div class="row pagination">
                    <div class="col s4 m4 l4">
                      <a href="{{ url('training/'.$paginationPrevID) }}" class="{{ ($prevDisabled) ? 'disabled' : '' }}">Back</a>
                    </div>
                    <div class="col s4 m4 l4">
                    </div>
                    <div class="col s4 m4 l4 right-align">
                        <a href="{{ url('training/'.$paginationNextID) }}" class="{{ ($nextDisabled) ? 'disabled' : '' }}">Next</a>
                    </div>
                </div>