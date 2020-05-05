// SORT ANALYZER START CODE BY MR. V

// Global Variables
let randomArray = [];
let reversedArray = [];
let nearlySortedArray = [];
let fewUniqueArray = [];
initializeDataArrays();

// HTML elements
let bubbleSelectEl = document.querySelector("#bubble-data");
let bubbleBtnEl = document.querySelector("#bubble-btn");
let bubbleResultsEl = document.querySelector("#bubble-results");

let selectionSelectEl = document.querySelector("#selection-data");
let selectionBtnEl = document.querySelector("#selection-btn");
let selectionResultsEl = document.querySelector("#selection-results");

let insertionSelectEl = document.querySelector("#insertion-data");
let insertionBtnEl = document.querySelector("#insertion-btn");
let insertionResultsEl = document.querySelector("#insertion-results");

// Event Listeners
bubbleBtnEl.addEventListener("click", bubbleSortData);
selectionBtnEl.addEventListener("click", selectionSortData);
insertionBtnEl.addEventListener("click", insertionSortData);

// Event Functions
function bubbleSortData() {
    // Display results of the bubble sort on the selected data
    bubbleResultsEl.innerHTML = performSelectedSort(bubbleSelectEl, bubbleSort);
}

function selectionSortData() {
    // Display results of the selection sort on the selected data
    selectionResultsEl.innerHTML = performSelectedSort(selectionSelectEl, selectionSort);
}

function insertionSortData() {
    // Display results of the insertion sort on the selected data
    insertionResultsEl.innerHTML = performSelectedSort(insertionSelectEl, insertionSort);
}

// Helper Functions
function performSelectedSort(selectEl, sortFunction) {
    // Make a copy of the selected data array
    let arrayCopy;

    let sortData = selectEl.value;
    if (sortData == "random") {
        arrayCopy = randomArray.slice();
    } else if (sortData == "reversed") {
        arrayCopy = reversedArray.slice();
    } else if (sortData == "nearly-sorted") {
        arrayCopy = nearlySortedArray.slice();
    } else if (sortData == "few-unique") {
        arrayCopy = fewUniqueArray.slice();
    }

    // Sort the array copy using the provided sort function
    let startTime = performance.now();
    sortFunction(arrayCopy);
    let endTime = performance.now();

    // Display Results of the Sort
    console.log(arrayCopy);
    return getResults(arrayCopy, startTime, endTime);
}


function getResults(sortedArray, sTime, eTime) {
    // Return message indicating success of sort and the time to sort
    if (isArraySorted(sortedArray)) {
        return `Array sorted in ${eTime - sTime} milliseconds.`;
    } else {
        return "Problem sorting array";
    }
}

function isArraySorted(anArray) {
    // Test if the provided array is sorted
    for (let i = 0; i < anArray.length - 1; i++) {
        if (anArray[i] > anArray[i + 1]) {
            return false;
        }
    }
    return true;
}