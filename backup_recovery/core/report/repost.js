// Report_fileserver
var textinputs = document.querySelectorAll('input[type=checkbox]');
if(textinputs.checked){
    alert(textinputs.value);
}
// var empty = [].filter.call(textinputs, function (el) {
//     return !el.checked
// });

// if (textinputs.length == empty.length) {
//     alert(textinputs.value);
//     return false;
// }