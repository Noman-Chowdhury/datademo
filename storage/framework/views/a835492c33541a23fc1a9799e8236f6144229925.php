<?php $__env->startSection('content'); ?>

    <button type="button" class="btn btn-primary" style="margin: 10px" data-toggle="modal" data-target="#exampleModal">Add Sector</button>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Sector Name</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


      <tr>
        <th scope="row"><?php echo e($key+1); ?></th>
        <td><?php echo e($sector->name); ?></td>
        <td>
            <button>Edit</button>
            <button>Delete</button>
        </td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>






  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(route('sector.store')); ?> " method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="exampleInputEmail1">Sector Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sector" placeholder="Enter Sector Name">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/backend/layouts/sectors.blade.php ENDPATH**/ ?>