<h2>Подсчет среднего возраста</h2>
<form method="post">
   <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>" />
   <select name="subunit_id">
      <option value="">Все сотрудники</option>
      <?php foreach ($subunits as $subunit): ?>
         <option value="<?= $subunit->getId() ?>"><?= $subunit->name ?></option>
      <?php endforeach; ?>
   </select>
   <button>Применить</button>
</form>

<div class="srvozrast-block">
   <?php if ($srvozrast !== ''): ?>
      <h3 class="srvozrast">СРЕДНИЙ ВОЗРАСТ СОТРУДНИКОВ</h3>
      <h3 class="srvozrast"><?= $subunit->name ?>:</h3>
      <h3 class="srvozrast"><?= $srvozrast ?></h3>
   <?php else: ?>
      <h3 class="srvozrast">СРЕДНИЙ ВОЗРАСТ СОТРУДНИКОВ XXX</h3>
   <?php endif; ?>
</div>