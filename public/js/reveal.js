document.addEventListener('click', (event) => {
  const boldElement = event.target.closest('b');
  
  if (boldElement) {
    boldElement.innerHTML = "hi@labirhin.art"
    boldElement.classList.toggle('unblurred');
  }
});