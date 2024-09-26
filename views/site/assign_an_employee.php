<h2>Прикрепить сотрудника</h2>
<form method="post" class='d-flex justify-content-center'>
    <div class='border border-5 border-dark center rounded-3'>
        <div>
            <h2 class="mb-4 text-center">Прикрепить<br>сотрудника</h2>
            <div class="column">
                <label><input type="text" name="surname" placeholder="Фамилия"></label>
                <label><input type="text" name="name" placeholder="Имя"></label>
                <label><input type="text" name="patronym" placeholder="Отчество"></label>
                <label for="department" class="form-label">Подразделение</label>
                <select name="department" id="department" class="form-select mb-3">
                    <option value="none">Подразделение 1</option>
                    <option value="man">Подразделение 2</option>
                    <option value="woman">Подразделение 3</option>
                </select>
            </div>
            <button type="submit" class="btn_btn-primary">Прикрепить</button>
        </div>
    </div>
</form>