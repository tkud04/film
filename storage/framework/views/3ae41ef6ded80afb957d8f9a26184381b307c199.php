<?php $__env->startSection('title',"Track Your Order"); ?>

<?php $__env->startSection('content'); ?>
   <!--start of middle sec-->
<div class="middle-sec wow fadeIn animated animated" data-wow-offset="10" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;">
    <div id="particles"><canvas class="pg-canvas" width="1349" height="450" style="display: block;"></canvas>
      <div id="not-found" class="wow fadeInDown text-center container animated animated" style="visibility: visible;">
        <div class="reset">
          <h2 class="text-primary text-uppercase">Track your order</h2>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <form method="post" id="track-order" action="#" accept-charset="UTF-8">
            <div class=" form-group">
              <label class="sr-only" for="order-id">Order ID</label>
              <input type="text" class="form-control" value="" name="" id="order-id" placeholder="Order ID" required="">
            </div>
            <div class=" form-group">
              <label class="sr-only" for="billing-mail">Billing Email</label>
              <input type="email" class="form-control" value="" name="" id="billing-mail" placeholder="Billing Email" required="">
            </div>
            <button class="btn btn-primary hvr-underline-from-center-primary" id="reset-submit" type="submit">track</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--end of middle sec--> 
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ace\resources\views/track.blade.php ENDPATH**/ ?>