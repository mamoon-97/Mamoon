
<div class="d-flex justify-content-around flex-wrap">
<div>
  <div class="card text-bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header"> Total Items</div>
  <div class="card-body">
  <h2>
        <?= $data->items_count ?>
    </h2>
    <p class="card-text">Total Items in the market</p>
  </div>
  </div> 
</div>


  <div>
  <div class="card text-bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header"> Users number</div>
  <div class="card-body">
  <h2>
        <?= $data->user_count ?>
    </h2>
    <p class="card-text">Total Users in the market</p>
  </div>
  </div> 
</div>
  
<div>
  <div>
  <div class="card text-bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Top five expensive items </div>
  <div class="card-body">
    <h2>
     <?php

    foreach($data->top_item as $top_items){

     echo $top_items['item_name'];

     echo $top_items['price'];
     echo "<br>";

        }

     ?>   
    </h2>
    <p class="card-text">the top 5 </p>
  </div>  
      </div> 

   
      <div class="d-flex justify-content-center  ">
          <div class="card mb-3 opacity-75" style="max-width: 18rem;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../../resources/img/img_7.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Total Transactions</h5>
                  <p class="card-text"><h2>
            <?= $data->transactions_count ?>
              </h2></p>
                </div>
              </div>
            </div>
          </div>
      </div>













  
  











