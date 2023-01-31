window.addEventListener("scroll", () => {
    document.getElementById("nav").classList.toggle('scroll', window.scrollY > 0)
});
function work(name) {
    var a = name.charAt(name.length - 1);
    if (name == `ro${a}`) {
        if (document.getElementById(`al${a}`).classList[5] == '-rotate-90') {
            document.getElementById(`al${a}`).classList.remove("-rotate-90");
            document.getElementById(`op${a}`).classList.add("h-14");
        } else {
            document.getElementById(`al${a}`).classList.add("-rotate-90");
            document.getElementById(`op${a}`).classList.remove("h-14");
        }
    } else {
        if (name.length == 5) {
            document.getElementById(`plus${a}`).classList.add("hidden");
            document.getElementById(`minus${a}`).classList.remove("hidden");
            document.getElementById(`div${a}`).classList.remove("h-16");
            document.getElementById(`div${a}`).classList.add("h-44");
        } else {
            document.getElementById(`minus${a}`).classList.add("hidden");
            document.getElementById(`plus${a}`).classList.remove("hidden");
            document.getElementById(`div${a}`).classList.remove("h-44");
            document.getElementById(`div${a}`).classList.add("h-16");
        }
    }
};
var aboutc = document.getElementById("aboutc");
var icon = document.getElementById("icon").classList;
function show() {
    if (aboutc.classList[2] == 'h-20') {
        aboutc.classList.remove("h-20");
        icon.remove("uil-plus");
        icon.add("uil-minus");
    } else {
        aboutc.classList.add("h-20");
        icon.add("uil-plus");
        icon.remove("uil-minus");
    }
};