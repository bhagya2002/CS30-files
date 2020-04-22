// Search & Sort Functions Library

// LINEAR SEARCH FUNCTION CRITERIA
// Search the anArray argument for the item argument using the linear search algorithm.
// If item found, return index where found, else return -1.
function linearSearch(anArray, item) {
    // **********************************
    // loops through an entire array whatever it is
    for (let i = 0; i < anArray.length; i++) {
        // once the item is found in the array the index is returned
        if (anArray[i] === item) {
            return i;
        }
    }
    // if the item is not found in the array then -1 is returned
    return -1;
    // **********************************
}

// BINARY SEARCH FUNCTION CRITERIA
// Search anArray for the item using the binary search algorithm.
// If item found, return index where found, else return -1.
function binarySearch(anArray, item) {
    // **********************************
    // set variables for left and right limits
    let minlim = 0;
    let maxlim = anArray.length - 1;

    // while the left is less than or equal to the right this code is run
    while (minlim <= maxlim) {
        // find the average and that is the mid-value that is used to test
        let midval = Math.floor((maxlim + minlim) / 2);
        // if the mid-value is the item then return the mid-value
        if (anArray[midval] === item) {
            return midval;
        }
        // if the mid-value is less than the item then left side becomes mid-value + 1
        else if (anArray[midval] < item) {
            minlim = midval + 1;
        }
        // if the mid-value is greater than the item then right side becomes mid-value -1
        else {
            maxlim = midval - 1;
        }
    }
    // if the item is not found in the array then -1 is returned
    return -1;
    // **********************************
}