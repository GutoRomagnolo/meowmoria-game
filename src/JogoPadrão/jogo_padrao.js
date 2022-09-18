const updateTableSize = () => {
  const tableSizeField = document.getElementById("seletor-tabuleiro");
  const selectedTableSize = tableSizeField.options[tableSizeField.selectedIndex].value;

  resolveTableImage(selectedTableSize);
}

const resolveTableImage = tableSize => {
  const possibleTableImages = [
    { name: "2x2", src: './../assets/ImagensTemporarias/2x2.png', class: "tabuleiro-2x2" },
    { name: "4x4", src: './../assets/ImagensTemporarias/4x4.png', class: "tabuleiro-4x4" },
    { name: "8x8", src: './../assets/ImagensTemporarias/8x8.png', class: "tabuleiro-8x8" }
  ]

  const tableImage = document.getElementById("imagem-tabuleiro");

  const selectedTableImage = possibleTableImages.find(tableImage => tableImage.name === tableSize);

  tableImage.src = selectedTableImage.src;
  tableImage.classList.add(selectedTableImage.class);
}

updateTableSize()



