<section class="content">
<div class="card" style="width: 18rem;">
  <div class="card-header">
    Hasil Cek
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">FROM :<?php echo $res->rajaongkir->origin_details->province ?> :  <?php echo $res->rajaongkir->origin_details->city_name ?></li>
    <li class="list-group-item">TO : <?php echo $res->rajaongkir->destination_details->province ?> :  <?php echo $res->rajaongkir->destination_details->city_name ?></li>
    <li class="list-group-item">Jasa Kurir : <?php echo $res->rajaongkir->results[0]->name ?></li>
    <li class="list-group-item">Berat : <?php echo ($res->rajaongkir->query->weight/1000).'KG' ?></li>
    <li class="list-group-item">Pilihan Paket</li>
    <?php foreach ($res->rajaongkir->results[0]->costs as $key => $value) { ?>
        <li class="list-group-item"><?= $value->description ?> | <?= $value->service ?> | <?= $value->cost[0]->value ?> | <?= $value->cost[0]->etd ?> day</li>
    <?php } ?>

  </ul>
</div>
</section>