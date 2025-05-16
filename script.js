// By: Raghid
// Digital Clock
function updateClock() {
  const now = new Date();
  const hours = String(now.getHours()).padStart(2, '0');
  const minutes = String(now.getMinutes()).padStart(2, '0');
  const seconds = String(now.getSeconds()).padStart(2, '0');
  document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
}

setInterval(updateClock, 1000);
updateClock();

// By: Ryan
// Background Color Changer
function changeColor() {
  const colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#FFC300'];
  const randomColor = colors[Math.floor(Math.random() * colors.length)];
  const card = document.getElementById('colorCard');
  card.style.backgroundColor = randomColor;
}
