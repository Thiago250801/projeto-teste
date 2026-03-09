<footer>
  <i class="bi bi-envelope-heart me-1"></i>
  © <?php echo date('Y'); ?> MessageHub — Aplicação de Mensagens
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Auto-dismiss flash alerts after 3s
  setTimeout(() => {
    const alert = document.querySelector(".alert");
    if (alert) {
      alert.classList.remove("show");
      setTimeout(() => alert.remove(), 300);
    }
  }, 3000);
</script>

</body>
</html>