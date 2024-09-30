<h2>Подсчет среднего возраста</h2>
<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
   <select name="subunit_id">
      <option value="">Все сотрудники</option>
      <?php foreach($subunits as $subunit): ?>
         <option value="<?= $subunit->getId() ?>"><?= $subunit->name ?></option>
      <?php endforeach; ?>
   </select>
   <button>Применить</button>
</form>

<p><?= $srvozrast ?></p>