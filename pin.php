<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PIN Code Entry</title>
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script> <!-- Alpine.js -->
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 600px;
      width: 100%;
    }

    .container p {
      margin-bottom: 20px;
      font-size: 1.2rem;
      color: #333;
    }

    .pin-inputs {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    .pin-inputs input {
      width: 50px;
      height: 70px;
      font-size: 2.5rem;
      font-weight: bold;
      text-align: center;
      border: 2px solid #537bb4;
      border-radius: 8px;
      background-color: #ffffff;
      color: #333;
      transition: all 0.2s ease-in-out;
    }

    .pin-inputs input:focus {
      border-color: #3b6fb4;
      outline: none;
      box-shadow: 0 0 5px rgba(81, 203, 238, 1);
    }

    .feedback {
      font-size: 1rem;
      font-weight: bold;
      color: #537bb4;
    }

    .feedback.correct {
      color: green;
    }

    .feedback.incorrect {
      color: red;
    }
  </style>
</head>
<body>

  <div class="container">
    <p>Enter Your 9-Digit PIN</p>
    <div x-data="pincode()" x-init="$refs['pin1'].focus()" class="pin-code"> <!-- Autofocus on first input -->
      <div class="pin-inputs">
        <template x-for="i in length" :key="i">
          <input type="text" :name="'pin'+i" maxlength="1"
                 class="unselectable"
                 @paste.prevent="paste($event)"
                 @input="autoMoveNext($event, i)"
                 @keydown.ctrl.a.prevent
                 @keydown.arrow-right.prevent="goto(i + 1)"
                 @keydown.arrow-left.prevent="goto(i - 1)"
                 :value="input[i-1] != null ? input[i-1] : ''" 
                 x-ref="'pin'+i" placeholder="-" <!-- Changed placeholder to '-' -->
                 :disabled="false">
        </template>
      </div>
      <div class="feedback" id="feedback"></div>
    </div>
  </div>

  <script>
    function pincode() {
      return {
        length: 9,  // Number of PIN digits
        input: [],
        correctPIN: '920000100',  // Correct PIN
        paste(event) {
          const pastedData = event.clipboardData.getData('text').slice(0, this.length);
          this.input = pastedData.split('');
          this.checkPIN();
        },
        autoMoveNext(event, index) {
          const key = event.target.value;
          // Check for valid numeric input
          if (!isNaN(key) && key.trim() !== '') {
            this.input[index - 1] = key; // Store input value
            // Move to the next input if not at the last one
            if (index < this.length) {
              this.goto(index + 1);
            } else {
              this.checkPIN(); // If last input, check PIN
            }
          } else if (event.inputType === 'deleteContentBackward') {
            // Handle backspace
            this.input[index - 1] = null; // Clear input
            if (index > 1) {
              this.goto(index - 1); // Move to the previous input
            }
          }
        },
        goto(index) {
          if (index > 0 && index <= this.length) {
            this.$refs['pin' + index].focus(); // Focus on the given input
          }
        },
        checkPIN() {
          const enteredPIN = this.input.join('');
          const feedbackElement = document.getElementById('feedback');
          
          if (enteredPIN === this.correctPIN) {
            feedbackElement.textContent = "Correct PIN!";
            feedbackElement.classList.add('correct');
            feedbackElement.classList.remove('incorrect');
            
            // Redirect to the URL when the PIN is correct
            window.location.href = "home.php";
          } else if (this.input.length === this.length && enteredPIN !== this.correctPIN) {
            feedbackElement.textContent = "Incorrect PIN. Try again.";
            feedbackElement.classList.add('incorrect');
            feedbackElement.classList.remove('correct');
          } else {
            feedbackElement.textContent = '';
          }
        }
      };
    }
  </script>

</body>
</html>
