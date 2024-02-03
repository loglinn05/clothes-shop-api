import {addClassIfDoesntExist, removeClassIfExists} from "./helpers.js";

function showPassword(input, event) {
    event.preventDefault();
    let buttonIcon = event.currentTarget.children[0];
    if (input.type === "password") {
        input.type = "text";
        removeClassIfExists(buttonIcon, "fa-eye");
        addClassIfDoesntExist(buttonIcon, "fa-eye-slash");
    } else {
        input.type = "password";
        removeClassIfExists(buttonIcon, "fa-eye-slash");
        addClassIfDoesntExist(buttonIcon, "fa-eye");
    }
}

export {showPassword}