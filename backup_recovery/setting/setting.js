var checkbox = document.querySelectorAll('input[type=checkbox]')

// set check box
document.querySelector("#day_select").style.display = "none";
document.querySelector("#week_select").style.display = "none";
document.querySelector("#month_select").style.display = "none";
checkbox[0].onclick = (e) => {
    console.log(0)
    if (!checkbox[0].checked) {
        document.querySelector("#day_select").style.display = "none";
        document.querySelector("#day_select").value = '';
    } else {
        document.querySelector("#day_select").style.display = ""
    }
}

checkbox[1].onclick = (e) => {
    console.log(1)
    if (!checkbox[1].checked) {
        document.querySelector("#week_select").style.display = "none";
        document.querySelector("#week_select").value = '';
    } else {
        document.querySelector("#week_select").style.display = ""
    }
}

checkbox[2].onclick = (e) => {
    console.log(2)
    if (!checkbox[2].checked) {
        document.querySelector("#month_select").style.display = "none";
        document.querySelector("#month_select").value = '';
    } else {
        document.querySelector("#month_select").style.display = ""
    }
}
// get full path backup

var pathfile = document.querySelector("#pathfile");
function selectFolder(e) {
    var theFiles = e.target.files;
    var relativePath = theFiles[0].webkitRelativePath;
    var folder = relativePath.split("/");
    alert(folder[0]);
    console.log(relativePath + folder);
    // console.log(theFiles);
    // console.log(folder)
}


