<div class="container">
    <div class="alert alert-primary">
        <a href="<?= ROOT; ?>/author/create" class="btn btn-primary">Add Author</a>
    </div>
    <div class="bg-dark text-white text-center p-2">
        <h2>This is Listing of Authors</h2>
    </div>
  
    <table class="table border">
        <thead>
            <tr>
                <th>S.no</th>
                <th>User name</th>
                <th>Full Name</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Email</th>
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
                        <td> <?= $info['username']; ?></td>
                        <td><?= setstring($info['fullname']); ?></td>
                        <td><?= $info['mobile']; ?></td>
                        <td><?= $info['gender']; ?></td>
                        <td><?= $info['email']; ?></td>
                        <td><a href="<?= ROOT; ?>author/edit/<?= encode_url($info['id']); ?>">Edit</a></td>
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