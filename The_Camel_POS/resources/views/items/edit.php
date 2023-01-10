<h1>Edit Items</h1>

<form action="/items/update" method="POST" class="w-50">
    <input type="hidden" name="id" value="<?= $data->item->id ?>">
    <div class="mb-3">
        <label for="post-title" class="form-label">Items name</label>
        <input type="text" class="form-control" id="post-title" name="item_name" value="<?= $data->item->item_name ?>">
    </div>
    <div class="mb-3">
        <label for="post-content">price</label>
        <input type="text" class="form-control" placeholder="Your price.." id="post-content"  name="price"><?= $data->item->price ?>
        
    </div>
    <div class="mb-3">
         <label for="post-content">cost</label>
        <input type="text" class="form-control" placeholder="Your cost.." id="post-content"  name="cost"><?= $data->item->cost ?>
        
    </div>
    <div class="mb-3">
      <label for="post-quantity">quantity</label>
        <input type="text" class="form-control" placeholder="Your quantity.." id="post-quantity" name="quantity"><?= $data->item->quantity ?>
       
    </div>
    <!-- <div class="my-3">
        <label for="post-tags">Tags</label>
        <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
            <?php foreach ($data->post->tags as $tag) : ?>
                <option value="<?= $tag->id ?>"><?= $tag->name ?></option>
            <?php endforeach; ?>
        </select>
    </div> -->

    <button type="submit" class="btn btn-warning mt-4">Update</button>
</form>