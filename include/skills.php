<?php
$rows = $Skill->all(['resume_id' => 1], " ORDER BY `category`");

?>
<div class="container text-center" style="padding-top:100px; margin-top:100px;" id="skill">
    <div class="row">
        <div class="col-12 col-sm-6 p-5">
            <h4>程式語言</h4>
            <div class="skillsA">
                <?php
                foreach ($rows as $row) {
                    if ($row['category'] == 0) {
                        echo "<div>{$row['name']}<br>{$row['intro']}</div>";
                    }
                }
                ?>
            </div>

        </div>
        <div class="col-12 col-sm-6 p-5">
            <h4>資料庫</h4>
            <?php
            foreach ($rows as $row) {
                if ($row['category'] == 1) {
                    echo "<div>{$row['name']}<br>{$row['intro']}</div>";
                }
            }
            ?>
        </div>
        <div class="col-12 col-sm-6 p-5">
            <h4>套件</h4>
            <div class="skillsA">
                <?php
                foreach ($rows as $row) {
                    if ($row['category'] == 2) {
                        echo "<div>{$row['name']}<br>{$row['intro']}</div>";
                    }
                }
                ?>
            </div>

        </div>
        <div class="col-12 col-sm-6 p-5">
            <h4>框架</h4>
            <?php
                    foreach($rows as $row){
                        if($row['category'] == 3){
                            echo "<div>{$row['name']}<br>{$row['intro']}</div>";
                        }
                    }
                ?>
        </div>
    </div>
</div>