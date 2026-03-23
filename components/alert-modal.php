<!-- Modal -->
<div class="modal fade" id="alert-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="border: 5px solid var(--primary) !important;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        $alertIsError = !empty($_SESSION['alert']['error']);
        $alertContent = htmlspecialchars((string) ($_SESSION['alert']['content'] ?? ''), ENT_QUOTES, 'UTF-8');
        ?>
        <h5 class="h5 text-center <?= $alertIsError ? 'text-danger' : 'text-dark' ?>"><?= $alertContent ?></h5>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="d-none" id="alert-btn" data-bs-toggle="modal" data-bs-target="#alert-modal"></button>


<script>
    const trigBtn = document.querySelector("#alert-btn");

    if (trigBtn) {
        trigBtn.click();
    }
</script>
