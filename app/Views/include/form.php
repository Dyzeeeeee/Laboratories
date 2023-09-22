<div class="form-container">
    <h2>Add Data</h2>
    <form action="<?= '/save' ?>" method="post">
        <div class="name-gender-container">
            <div class="name-container">
                <label for="StudName">Name:</label>
                <input type="hidden" name="id" value="<?= isset($up['id']) ? $up['id'] : '' ?>">
                <input type="text" name="StudName" placeholder="" value="<?= isset($up['StudName']) ? $up['StudName'] : '' ?>">
            </div>
            <div class="gender-container">
                <label for="StudGender">Gender:</label>
                <select name="StudGender">
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male" <?= (isset($up['StudGender']) && $up['StudGender'] === 'Male') ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?= (isset($up['StudGender']) && $up['StudGender'] === 'Female') ? 'selected' : '' ?>>Female</option>
                </select>
            </div>
        </div>
        <div class="course-container">
            <label for="StudCourse">Course:</label>
            <input type="text" name="StudCourse" placeholder="" value="<?= isset($up['StudCourse']) ? $up['StudCourse'] : '' ?>">
        </div>
        <div class="year-section-container">
            <div class="year-container">
                <label for="StudYear">Year:</label>
                <input type="text" name="StudYear" placeholder="" value="<?= isset($up['StudYear']) ? $up['StudYear'] : '' ?>">
            </div>
            <div class="section-container">
                <label for="StudSection">Section:</label>
                <select name="StudSection">
                    <option value="" disabled selected>Select Section</option>
                    <?php foreach ($sec as $i) : ?>
                        <option><?= (isset($i['Section'])) ? $i['Section'] : '' ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <br>
        <input type="submit" name="submit" value="Save">
    </form>


    <h2>Sections</h2>
    <form action="<?= '/add' ?>" method="post">
        <label for="StudSection">Add Section:</label>
        <div class="add-section-container">
            <input type="hidden" name="id" value="<?= isset($ups['Sid']) ? $ups['Sid'] : '' ?>">
            <input type="text" name="Section" placeholder="" value="<?= isset($ups['Section']) ? $ups['Section'] : '' ?>">
            <input type="submit" name="submit" value="Save">
        </div>
        <ul>
            <?php foreach ($sec as $i) : ?>
                <li>
                    <?= $i['Section'] ?>
                    <span class="actions">
                        <a href="/updateSection/<?= $i['Sid'] ?>">Edit</a>
                        <a href="/deleteSection/<?= $i['Sid'] ?>">Delete</a>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </form>
</div>