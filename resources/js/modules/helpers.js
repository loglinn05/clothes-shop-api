function addClassIfDoesntExist(element, className) {
    if (!element.classList.contains(className)) {
        element.classList.add(className);
    }
}

function removeClassIfExists(element, className) {
    if (element.classList.contains(className)) {
        element.classList.remove(className);
    }
}

export {addClassIfDoesntExist, removeClassIfExists}