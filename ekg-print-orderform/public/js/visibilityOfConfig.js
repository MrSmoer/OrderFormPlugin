function activated(selector) {
    var list = document.getElementById("configDivs").children;
    switch (selector.options[selector.selectedIndex].value) {
        case "autoconfig":
            setVisibility(list[0], false);
            setVisibility(list[1], false);
            break;
        case "online"://TODO
            setVisibility(list[0], true);
            setVisibility(list[1], false);
            break;
        case "upload":
            setVisibility(list[0], false);
            setVisibility(list[1], true);
            break;
    }
}

function setVisibility(element, visible) {
    if (visible) {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}