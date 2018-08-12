<div class="row">
    <div class="container text-center">
        <a class="btn btn-success" id="btn-share" href="<?= ROOT_PATH; ?>shares/add">Share Something</a>
        <?php foreach ($viewmodel as $item) : ?>

            
                <div class="alert alert-primary">
                    <h3><?= $item['title']; ?></h3>
                    <small><?= $item['create_date']; ?></small>
                    </hr>
                    <p><?= $item['body']; ?></p>
                    </br>
                    <a href="<?= $item['link']; ?>" class="btn btn-primary" tartget="_blank">Go to Website</a>
                </div> 
            

        <?php endforeach; ?>
    </div>
</div>