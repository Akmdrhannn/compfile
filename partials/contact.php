
<section class="py-5" id="contact">
  <div class="container">
    <h2 class="section-title mb-3">Kontak Kami</h2>
    <p>Untuk pertanyaan, silakan hubungi kami:</p>
    <form action="submit_contact.php" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required />
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Pesan</label>
        <textarea class="form-control" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-success">Kirim</button>
    </form>
  </div>
</section>
