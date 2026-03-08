</div>

<footer class="text-center mt-5 mb-3 text-muted">

<small>
© <?php echo date('Y'); ?> MessageHub — Aplicação de Mensagens
</small>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="public/js/theme.js"></script>

<script>

setTimeout(() => {

const alert = document.querySelector(".alert");

if(alert){

alert.classList.remove("show");

setTimeout(() => {
alert.remove();
},300);

}

},3000);

</script>

</body>
</html>
