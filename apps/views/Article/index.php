<div class="container">
    <div class="alert alert-primary">
        <a href="<?= ROOT; ?>/article/create" class="btn btn-primary">Add Article</a>
    </div>
    <div class="bg-dark text-white text-center p-2">
        <h2>This is Listing of Article</h2>
    </div>
    <table class="table border">
        <thead>
            <tr>
                <th>S.no</th>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($data) && $data) {
                $index = 1;
                foreach ($data as $info) {
            ?>
                    <tr>
                        <td> <?= $index++; ?></td>
                        <td> <?= $info['uid']; ?></td>
                        <td><?= setstring($info['title']); ?></td>
                        <td><?= $info['description']; ?></td>
                        <td><a href="<?= ROOT; ?>article/edit/<?= encode_url($info['id']); ?>">Edit</a></td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="4">Data not found.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>