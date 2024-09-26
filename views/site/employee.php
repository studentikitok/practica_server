<h2>Добавление нового сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
<label><input type="text" name="surname" placeholder="Фамилия"></label>
   <label><input type="text" name="name" placeholder="Имя"></label>
   <label><input type="text" name="patronym" placeholder="Отчество"></label>
   <label class="gender">Пол<br><select name="gender" id="gender">
      <option value="man">Мужчина</option>
      <option value="woman">Женщина</option>
   </select></label>
   <label><input type="date" name="date_of_birth" placeholder="Дата рождения"></label>
   <label><input type="text" name="address" placeholder="Адрес"></label>
   <label><input type="text" name="login" placeholder="Логин"></label>
   <label><input type="password" name="password" placeholder="Пароль"></label>

    <label class="subunit">
        <select name="subunit_id">
            <option value="">Выберите подразделение</option>
            <?php foreach ($subunits as $subunit): ?>
                <option value="<?= $subunit->getId() ?>"><?= $subunit->name ?></option>
            <?php endforeach; ?>
        </select>

    </label>
    <label class="subunit">
        <select name="role">
            <option value="">Выберите роль</option>
            <?php foreach ($roles as $role): ?>
                <option value="<?= $role->getId() ?>"><?= $role->name ?></option>
            <?php endforeach; ?>
        </select>

    </label>

    <button>Добавить сотрудника</button>
</form>