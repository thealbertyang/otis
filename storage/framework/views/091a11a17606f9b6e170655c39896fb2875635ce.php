                <div class="row pagination">
                    <div class="col s4 m4 l4">
                      <a href="<?php echo e(url('training/'.$paginationPrevID)); ?>" class="<?php echo e(($prevDisabled) ? 'disabled' : ''); ?>">Back</a>
                    </div>
                    <div class="col s4 m4 l4">
                    </div>
                    <div class="col s4 m4 l4 right-align">
                        <a href="<?php echo e(url('training/'.$paginationNextID)); ?>" class="<?php echo e(($nextDisabled) ? 'disabled' : ''); ?>">Next</a>
                    </div>
                </div>