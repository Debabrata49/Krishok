const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

const editItem = document.getElementById("edit-product");
const deleteItem = document.getElementById("delete-product");

editItem.addEventListener("click", function () {
    console.log("edit button has been clicked");
    alert(
        "Editing button has been Clicked, you can add the functionality of editing the item from the script"
    );
});

deleteItem.addEventListener("click", function () {
    console.log("delete button has been clicked");
    alert(
        "Delete button has been Clicked, you can add the functionality of deleting the item from the script"
    );
});

allSideMenu.forEach((item) => {
    const li = item.parentElement;

    item.addEventListener("click", function () {
        allSideMenu.forEach((i) => {
            i.parentElement.classList.remove("active");
        });
        li.classList.add("active");
    });
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
    sidebar.classList.toggle("hide");
});

if (window.innerWidth < 768) {
    sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
    if (this.innerWidth > 576) {
        searchButtonIcon.classList.replace("bx-x", "bx-search");
        searchForm.classList.remove("show");
    }
});

const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
    if (this.checked) {
        document.body.classList.add("dark");
    } else {
        document.body.classList.remove("dark");
    }
});

