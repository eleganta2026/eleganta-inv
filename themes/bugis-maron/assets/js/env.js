const VERSION_URL = "/inv/themes/bugis-maron/version.php";

let currentVersion = null;

async function checkReload() {
  try {
    const response = await fetch(`${VERSION_URL}?t=${Date.now()}`, {
      cache: "no-store",
    });

    const data = await response.json();

    if (currentVersion !== null && currentVersion !== data.version) {
      location.reload();
    }

    currentVersion = data.version;
  } catch (error) {
    console.error("Auto reload error:", error);
  }
}

checkReload();

setInterval(checkReload, 1000);
