<h1><?= $this->name; ?></h1>
<div class="container">
    <table class="table border">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Product Name</th>
                <th>Product Price</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($data) && $data) {
                $index = 1;
                foreach ($data as $info) {
            ?>
                    <tr>
                        <td> <?= $index++; ?></td>
                        <td><?= setstring($info['product_name']); ?></td>
                        <td><?= $info['product_price']; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
<button onclick="window.print()">print</button>