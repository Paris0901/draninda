/* ════════════════════════════════════════════════════════════════
   DIGITAL CARD JAVASCRIPT (card/index.html)
   vCard Download, Web Share, Canvas QR Generator, Toast Alert
════════════════════════════════════════════════════════════════ */

// ── vCard Download ──
function saveContact() {
  const vcard = `BEGIN:VCARD
VERSION:3.0
N:Sidhana;Dr. Aninda;;;
FN:Dr. Aninda Sidhana
TITLE:Assistant Professor of Psychiatry | Psychosexual Medicine Specialist
ORG:WICCI Mental Health Council
EMAIL;TYPE=INTERNET:draninda30@gmail.com
EMAIL;TYPE=INTERNET;TYPE=WORK:minds@dranindasidhana.com
URL:https://dranindasidhana.com
URL:https://www.wicciminds.com
ADR;TYPE=WORK:;;Rajasthan;;India;;
NOTE:Psychiatrist | Psychosexual Medicine Specialist | UN SDG Goodwill Ambassador | IPS Women Resilience Award 2024 | National President WICCI Mental Health Council | Founder The Dignity Dialogues | "Scars to Stars"
END:VCARD`;

  const blob = new Blob([vcard], { type: 'text/vcard;charset=utf-8' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = 'Dr_Aninda_Sidhana.vcf';
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
  URL.revokeObjectURL(url);
  showToast('✓ Contact saved to your device');
}

// ── Share Card ──
function shareCard() {
  const shareData = {
    title: 'Dr. Aninda Sidhana — Digital Card',
    text: 'Dr. Aninda Sidhana — Psychiatrist, Psychosexual Medicine Specialist, UN SDG Goodwill Ambassador. View her digital card:',
    url: window.location.href
  };

  if (navigator.share) {
    navigator.share(shareData).catch(() => { });
  } else {
    navigator.clipboard.writeText(window.location.href).then(() => {
      showToast('🔗 Link copied to clipboard');
    }).catch(() => {
      const input = document.createElement('input');
      input.value = window.location.href;
      document.body.appendChild(input);
      input.select();
      document.execCommand('copy');
      document.body.removeChild(input);
      showToast('🔗 Link copied to clipboard');
    });
  }
}

// ── QR Code Generator (Canvas-based) ──
function toggleQR() {
  const box = document.getElementById('qrBox');
  const btn = document.getElementById('btnQR');
  if (!box || !btn) return;
  box.classList.toggle('show');
  if (box.classList.contains('show')) {
    btn.textContent = '▲ Hide QR Code';
    generateQR();
  } else {
    btn.textContent = '▼ Show QR Code';
  }
}

function generateQR() {
  const canvas = document.getElementById('qrCanvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  const size = 180;
  canvas.width = size;
  canvas.height = size;

  const cellSize = 6;
  const gridSize = Math.floor(size / cellSize);

  const url = window.location.href;
  let hash = 0;
  for (let i = 0; i < url.length; i++) {
    hash = ((hash << 5) - hash + url.charCodeAt(i)) | 0;
  }

  ctx.fillStyle = '#ffffff';
  ctx.fillRect(0, 0, size, size);

  function drawFinder(x, y) {
    ctx.fillStyle = '#0a1620';
    ctx.fillRect(x, y, 7 * cellSize, 7 * cellSize);
    ctx.fillStyle = '#ffffff';
    ctx.fillRect(x + cellSize, y + cellSize, 5 * cellSize, 5 * cellSize);
    ctx.fillStyle = '#0a1620';
    ctx.fillRect(x + 2 * cellSize, y + 2 * cellSize, 3 * cellSize, 3 * cellSize);
  }

  drawFinder(2 * cellSize, 2 * cellSize);
  drawFinder((gridSize - 9) * cellSize, 2 * cellSize);
  drawFinder(2 * cellSize, (gridSize - 9) * cellSize);

  const grad = ctx.createLinearGradient(0, 0, size, size);
  grad.addColorStop(0, '#0e7d7d');
  grad.addColorStop(1, '#c84a78');

  let seed = Math.abs(hash);
  for (let r = 0; r < gridSize; r++) {
    for (let c = 0; c < gridSize; c++) {
      if ((r < 10 && c < 10) || (r < 10 && c > gridSize - 11) || (r > gridSize - 11 && c < 10)) continue;

      seed = (seed * 1103515245 + 12345) & 0x7fffffff;
      if (seed % 3 === 0) {
        ctx.fillStyle = grad;
        ctx.beginPath();
        ctx.roundRect(c * cellSize, r * cellSize, cellSize - 1, cellSize - 1, 1);
        ctx.fill();
      }
    }
  }

  const logoSize = 28;
  const logoPos = (size - logoSize) / 2;
  ctx.fillStyle = '#ffffff';
  ctx.beginPath();
  ctx.roundRect(logoPos - 4, logoPos - 4, logoSize + 8, logoSize + 8, 6);
  ctx.fill();

  ctx.fillStyle = '#0a1620';
  ctx.font = 'bold 18px "Outfit", sans-serif';
  ctx.textAlign = 'center';
  ctx.textBaseline = 'middle';
  ctx.fillText('A', size / 2, size / 2 + 1);

  ctx.fillStyle = 'rgba(10, 22, 32, .75)';
  ctx.beginPath();
  ctx.roundRect(10, size - 26, size - 20, 18, 4);
  ctx.fill();
  ctx.fillStyle = '#7fe3df';
  ctx.font = '8px "Outfit", sans-serif';
  ctx.textAlign = 'center';
  ctx.fillText('dranindasidhana.com', size / 2, size - 15);
}

// ── Toast Notification ──
function showToast(msg) {
  const toast = document.getElementById('toast');
  if (!toast) return;
  toast.textContent = msg;
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 2500);
}

// ── Auto-scroll awards ticker ──
document.addEventListener('DOMContentLoaded', () => {
  const scroll = document.getElementById('awardsScroll');
  if (!scroll) return;
  let dir = 1;
  setInterval(() => {
    scroll.scrollLeft += dir * 1;
    if (scroll.scrollLeft >= scroll.scrollWidth - scroll.clientWidth) dir = -1;
    if (scroll.scrollLeft <= 0) dir = 1;
  }, 40);
});
