<h2>Выбор подразделения</h2>
<form method="get" class='d-flex justify-content-center'>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>" />
    <div class='sel'>
        <div class="sel">
            <div class="sel">
                <label>Подразделение</label>
                <select name="subdivision">
                    <?php if (isset($subdivisions)): ?>
                        <?php foreach ($subdivisions as $subdivision): ?>
                            <option value="<?= $subdivision->id; ?>"><?= $subdivision->name; ?></option>
                        <?php endforeach ?>
                    <?php endif; ?>

                </select>
                <?php if (isset($employees)): ?>
                    <?php foreach ($employees as $employee): ?>
                        <div><?= $employee->name; ?></div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <button id="subunit_button">Выбор</button>
                <br>
            </div>
        </div>
    </div>
</form>