// // NICKNAME GENERATOR
// "use strict"; // Use strict mode

// // Global Variables
// let nicknames = ["the Emperor", "the Droideka", "the Jedi", "Twinkle Toes", "the Scientist", "the Tank"];
// let index = 0;

// // Add Event Listeners
// $("#first").on("change", setFirstName);
// $("#last").on("change", setLastName);
// $("#next").on("click", next);
// $("#prev").on("click", prev);
// $("#random").on("click", randomNickname);

// // Event Functions
// function setFirstName() {
//     $("#firstDisplay").html($("#first").val());
// }

// function setLastName() {
//     $("#lastDisplay").html($("#last").val());
// }

// function next() {
//     index++;
//     if (index === nicknames.length) {
//         index = 0;
//     }
//     $("#nickname").html(nicknames[index]);
// }

// function prev() {
//     index--;
//     if (index === -1) {
//         index = nicknames.length - 1;
//     }
//     $("#nickname").html(nicknames[index]);
// }

// function randomNickname() {
//     let randomIndex = Math.floor(Math.random() * nicknames.length);
//     $("#nickname").html(nicknames[randomIndex]);
// }