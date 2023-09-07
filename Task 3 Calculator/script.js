const display = document.getElementById("display");
const buttons = [
    "7",
    "8",
    "9",
    "/",
    "4",
    "5",
    "6",
    "*",
    "1",
    "2",
    "3",
    "-",
    "0",
    ".",
    "=",
    "+",
];

buttons.forEach((buttonText) => {
    const button = document.createElement("button");
    button.textContent = buttonText;
    button.className = "button";
    button.addEventListener("click", () => handleButtonClick(buttonText));
    document.querySelector(".buttons").appendChild(button);
});

function handleButtonClick(buttonText) {
    if (buttonText === "=") {
        try {
            display.value = eval(display.value);
        } catch (error) {
            display.value = "Error";
        }
    } else if (buttonText === "C") {
        display.value = "";
    } else {
        display.value += buttonText;
    }
}

const clearButton = document.querySelector(".clear");
const historyList = document.getElementById("history-list");
let historyIndex = 0;

clearButton.addEventListener("click", clearDisplay);

function clearDisplay() {
    display.value = "";
}