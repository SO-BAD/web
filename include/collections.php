<div class="container" style="padding-top:100px; margin-top:0px; min-height:600px;" id ="collection">
    <div class="row">
        <div class="col-12 mt-3" style="color:white;">
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
            <div class="col-12 col-lg-6  col-xl-4 p-5 clBox" >
                <div class="collection" data-skills="<?= $row['skills']; ?>">
                    <img src="img/collections/<?= $row['img']; ?>">
                    <div class="collectionBG">
                        <div class="collectionModal">
                            <div>
                                <?= $row['name'];?>
                            </div>
                            <i class="fa-solid fa-computer-mouse"onclick="modal(<?= $row['id']; ?>)"></i>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>