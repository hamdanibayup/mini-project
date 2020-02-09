<div class="container-fluid">
  <h4>Keranjang Belanja</h4>

  <table class="table table-bordered table-striped table-hover">
    <tr>
      <th>No</th>
      <th>Nama Produk</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Sub Total</th>
    </tr>

    <?php $no=1; foreach($this->cart->contents() as $item) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $item["name"]; ?></td>
        <td><?= $item["qty"]; ?></td>
        <td>Rp. <?= number_format($item["price"], 0, ",", "."); ?></td>
        <td>Rp. <?= number_format($item["subtotal"], 0, ",", "."); ?></td>
      </tr>
    <?php endforeach; ?>

      <tr>
        <td colspan=4 class="text-right"><strong>Total</strong></td>
        <td><strong>Rp. <?= number_format($this->cart->total(), 0, ",", "."); ?></strong></td>
      </tr>
  </table>

  <div class="float-right">
      <a href="<?= base_url('dashboard/hapus_keranjang'); ?>">
        <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
      </a>

      <a href="<?= base_url('dashboard'); ?>">
        <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
      </a>

      <a href="<?= base_url('dashboard/pembayaran'); ?>">
        <div class="btn btn-sm btn-success">Pembayaran</div>
      </a>
  </div>
</div>