<h1>Edit transactions</h1>



<form action="/transactions/update" method="POST" class="w-50">

    <input type="hidden" name="id" value="<?= $data->transactions->id ?>">

    <div class="mb-3">

        <label for="post-title" class="form-label">item name</label>

        <input type="text" class="form-control" id="post-title" name="item_name" value="<?= $data->transactions->item_name ?>">

    </div>

    <div class="mb-3">
      <label for="post-quantity">quantity</label>
        <input class="form-control" placeholder="Your post content.." id="post-quantity"  name="quantity"><?= $data->transactions->quantity ?>

        
    </div>

    <div class="mb-3">
        <label for="post-total">total</label>
        <input class="form-control" placeholder="Your post content.." id="post-total"  name="total"><?= $data->transactions->total ?>

       

    </div>

    <button type="submit" class="btn btn-warning mt-4">Update</button>

</form>