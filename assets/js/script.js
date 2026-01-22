

document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.btn-service');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      button.classList.add('active');
    });
  });
});