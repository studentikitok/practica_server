<h2>Добавление нового сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>" />
    <label><input type="text" name="surname" placeholder="Фамилия"></label>
    <label><input type="text" name="name" placeholder="Имя"></label>
    <label><input type="text" name="patronym" placeholder="Отчество"></label>
    <select name="gender">
        <option value="man">Мужчина</option>
        <option value="woman">Женщина</option>
    </select>
    <label><input type="date" name="date_of_birth" placeholder="Дата рождения"></label>
    <label><input type="text" name="address" placeholder="Адрес"></label>
    <label for="subunit_id"><select name="subunit_id">
            <option value="">Выберите подразделение</option>
            <?php foreach ($subunits as $subunit): ?>
                <option value="<?= $subunit->getId() ?>"><?= $subunit->name ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <button>Добавить сотрудника отдела</button>
</form>