<h2>Добавление подразделения</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>" />
    <label><input type="text" name="name" placeholder="Название подразделения"></label>
    <button>Добавить подразделения</button>
</form>