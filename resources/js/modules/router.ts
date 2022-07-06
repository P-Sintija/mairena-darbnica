const CONTROLLERS_DIRECTORY = "controllers";
let subscribers = [];

function getCurrentController() {
    return document.body.getAttribute("data-js-controller");
}

export default {
    on: (controller, path) => {
        subscribers[controller] = [CONTROLLERS_DIRECTORY, path].join("/");
    },
    run: () => {
        const currentController = getCurrentController();
        if (currentController && subscribers[currentController]) {
            let module = require("../" + subscribers[currentController]).default;
            if (module && typeof module.onStart === "function") {
                module.onStart();
            }
        }
    }
};
