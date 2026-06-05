import zipfile
import tempfile
import subprocess
import shutil
from pathlib import Path

INPUT_ZIP = "2mb.zip"
OUTPUT_FOLDER = "countdown"

QUALITY = "85"

SUPPORTED_EXTENSIONS = {
    ".png",
    ".jpg",
    ".jpeg",
}


def convert_to_webp(image_path):
    webp_path = image_path.with_suffix(".webp")

    subprocess.run(
        [
            "cwebp",
            "-m", "6",
            "-q", QUALITY,
            "-mt",
            str(image_path),
            "-o",
            str(webp_path),
        ],
        check=True,
        stdout=subprocess.DEVNULL,
        stderr=subprocess.DEVNULL,
    )

    image_path.unlink()

    print(f"✓ {image_path.name} -> {webp_path.name}")


def main():

    output_dir = Path(OUTPUT_FOLDER)

    if output_dir.exists():
        shutil.rmtree(output_dir)

    output_dir.mkdir(parents=True)

    with tempfile.TemporaryDirectory() as temp_dir:

        extract_dir = Path(temp_dir)

        with zipfile.ZipFile(INPUT_ZIP, "r") as zip_ref:
            zip_ref.extractall(extract_dir)

        for file in extract_dir.rglob("*"):

            if (
                file.is_file()
                and file.suffix.lower() in SUPPORTED_EXTENSIONS
            ):
                convert_to_webp(file)

        shutil.copytree(
            extract_dir,
            output_dir,
            dirs_exist_ok=True,
        )

    print()
    print(f"Selesai: {OUTPUT_FOLDER}/")


if __name__ == "__main__":
    main()