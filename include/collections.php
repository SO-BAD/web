<div class="container" style="padding-top:100px; margin-top:100px;" id ="collection">
    <div class="row">
        <div class="col-12">
            相關程式語言(框架)
            <select name="" id="skill_opt" onchange="skill()">
                <option value="0">顯示全部</option>
                <?php
                $skills = $Skill->all(['resume_id' => 1]);

                foreach ($skills as $skill) {
                    echo "<option value = '{$skill['id']}'>{$skill['name']}</option>";
                }
                ?>
            </select>
        </div>

        <?php
        $rows = $Collection->all(" ORDER BY `id` DESC ");
        foreach ($rows as $row) {

        ?>
            <div class="col-12 col-sm-6 col-lg-4 p-5 clBox" >
                <div class="collection" data-skills="<?= $row['skills']; ?>">
                    <img src="img/collections/<?= $row['img']; ?>">
                    <div class="collectionBG">
                        <div class="collectionModal" onclick="modal(<?= $row['id']; ?>)">
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>