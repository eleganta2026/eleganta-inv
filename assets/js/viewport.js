function updateViewportBg(section) {
  if (window.innerWidth > 480) return;

  const viewport = document.getElementById("viewport");
  if (!viewport || !section) return;

  const bg = section.dataset.bg || "#ffffff";

  viewport.style.backgroundColor = bg;
  document.body.style.backgroundColor = bg;
}

function updateViewportBackground(section) {
  const viewportBg = document.getElementById("viewportBg");
  if (!viewportBg || !section) return;

  const image = section.dataset.viewportBg;

  viewportBg.style.backgroundImage = image ? `url("${image}")` : "none";
}
