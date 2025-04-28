let count = 0;
        const counterDisplay = document.getElementsByClassName('counter-container');

        function updateDisplay() {
            counterDisplay.textContent = count;
        }

        // Increment the counter every second
        const intervalId = setInterval(() => {
            if (count < 100) {
                count++;
                updateDisplay();
            } else {
                clearInterval(intervalId); // Stop the interval when count reaches 100
            }
        }, 1000); // Adjust the interval (1000ms = 1 second)

        // Initialize display
        updateDisplay();