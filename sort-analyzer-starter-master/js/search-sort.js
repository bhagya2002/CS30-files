// Library of Search & Sort Functions

// Use Bubble Sort algorithm to sort array argument
function bubbleSort(anArray) {
    // loop through the whole array to compare
    for (let i = 0; i < anArray.length; i++) {
        // loop through it again for number of comparisions requred
        for (let x = 0; x < anArray.length; x++) {
            // if the second value (larger index) is smaller than the first one (smaller index) then...
            if (anArray[x] > anArray[x + 1]) {
                // set a temporary index at the value of the one on the left
                let temp = anArray[x];
                //  this performs the swap. The smaller value moves to the left in the array
                anArray[x] = anArray[x + 1];
                // new temperoary index is assigned (one up from the new smaller value index)
                anArray[x + 1] = temp;
            }
        }
    }
}

// Use Selection Sort algorithm to sort array argument
function selectionSort(anArray) {
    // loop through the whole array
    for (let i = 0; i < anArray.length; i++) {
        // set min position to the current fill slot
        let min = i;
        // set the value to the right of min index
        for (let x = i + 1; x < anArray.length; x++) {
            // if the value of the min value is greater than the value to the right of the min then...
            if (anArray[min] > anArray[x]) {
                // set min position to the position of the current element
                min = x;
            }
        }
        // swap the values at the min position and the fill slot
        // set temporary value to min
        let temp = anArray[i];
        // this is the swap! the smaller value moves to the fill slot 
        anArray[i] = anArray[min];
        // new min value, this is the second part of the swap
        anArray[min] = temp;
    }
}

// Use Insertion Sort algorithm to sort array argument
function insertionSort(anArray) {
    // loop through the whole array
    for (let i = 1; i < anArray.length; i++) {
        let x = i - 1;
        let temp = anArray[i];
        // moves the value in the index until it passes all the values larger or untill it hit [0]
        while (x >= 0 && anArray[x] > temp) {
            anArray[x + 1] = anArray[x];
            x--;
        }
        anArray[x + 1] = temp;
    }
}