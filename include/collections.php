<div class="container">
    <div class="row">
        <?php
        $rows = $Collection->all();
        foreach ($rows as $row) {

        ?>
            <div class="col-12 col-sm-6 col-lg-4 p-5">
                <div class = "collection">
                    <img src="img/collections/<?= $row['img'];?>" >
                    <div class="collectionBG">
                        <div class="collectionModal" onclick="modal(<?= $row['id'];?>)">
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>