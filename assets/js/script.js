{/* <script>
  document.querySelectorAll('.btn-service').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.btn-service')
        .forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    });
  });
</script> */}


document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.btn-service');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      button.classList.add('active');
    });
  });
});