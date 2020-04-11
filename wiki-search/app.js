// on load of the page (that was DOMContentLoaded does)
document.addEventListener('DOMContentLoaded', function () {
    // on the click of the search button it preforms the function below
    document.getElementById('search').onclick = function searchIt() {
        // gets value from the user input
        var searchTerm = $("#searchTerm").val();
        // wikipedia API link for search
        var url = "https://en.wikipedia.org/w/api.php?action=opensearch&format=json&search=" + searchTerm + "&callback=?";

        // ajax and JSON to do the API search
        $.ajax({
            // how the promise is done in JSON using AJAX
            // retreiveing data from this URL
            url: url,
            // getting information
            type: 'GET',
            // what type of data is it in
            contentType: "application/json; charset=utf-8",
            // allows for the promise to work
            async: false,
            // what type it coneverts into 
            dataType: "json",
            // when all this is successful and done then do the following
            success: function searchIt(data) {
                console.log(data);
                // output to HTML (index page)
                $('#output').html();

                // getting doing something (listing) the data
                // for loop to go through the results "objects" that are stored in an array 
                for (var i = 0; i < data[1].length; i++) {
                    // this takes the objects in the array key-value order and displays them using prepend a more safer version of innerHTML
                    // data[3] is the link, data[1] is the name of the wiki search, and data[2] is the information for that specific search
                    $("#output").prepend("<div><div class='res'><a href=" + data[3][i] + "><h2>" + data[1][i] + "</h2>" + "<p>" + data[2][i] + "</p></a></div></div>");
                }
            }
        })
    }
});;