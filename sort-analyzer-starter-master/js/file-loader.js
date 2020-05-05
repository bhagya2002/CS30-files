// File Loader Functions

function initializeDataArrays() {
  // Initialize Global Data Arrays with text file contents
  fetch("data-files/random-values.txt")
    .then((rawData) => rawData.text())
    .then((textData) => randomArray = numberArrayFromText(textData));

  fetch("data-files/reversed-values.txt")
    .then((rawData) => rawData.text())
    .then((textData) => reversedArray = numberArrayFromText(textData));

  fetch("data-files/nearly-sorted-values.txt")
    .then((rawData) => rawData.text())
    .then((textData) => nearlySortedArray = numberArrayFromText(textData));

  fetch("data-files/few-unique-values.txt")
    .then((rawData) => rawData.text())
    .then((textData) => fewUniqueArray = numberArrayFromText(textData));
}

function numberArrayFromText(data) {
  // Convert text file data into an array of numbers
  let temp = data.split(/\r?\n/);
  for (let i = 0; i < temp.length; i++) {
    temp[i] = +temp[i]; // Convert element to Number
  }
  return temp;
}
