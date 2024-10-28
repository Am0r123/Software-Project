<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        .backgroundimage{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:auto;
            z-index:-10;
        }
        .container {
            background-color: white;
            margin: 100px auto;
            padding: 20px 50px;
            width: 450px;
            height: 500px;
            border-radius: 10px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        h2 {
            color: #000;
            text-align: center;
        }

        .form-group {
            margin: 40px 0px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100px;
            padding: 10px;
            background-color: #ff0000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button.back {
            position: absolute;
            top: 470px;
            background-color: #555;
        }

        button.next, button.submit {
            position: absolute;
            top: 470px;
            right: 40px;
        }

        button + button {
            margin-left: 10px;
        }

        .hidden {
            display: none;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .progress-bar-container {
            position:absolute;
            top:0;
            left:0;
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-bar {
            height: 10px;
            background-color: #ff0000;
            width: 0%;
        }
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            display: block;
            padding: 40px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #f0f8ff;
            color: #007bff;
            cursor: pointer;
            text-align: center;
        }
        .file-name {
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }
        h3{
            margin-top: 30px;
        }
        .buttons,.buttons2{
            background-color: #ff6666;
            color: white;
        }
        .selected{
            background-color: #ff0000;
            color: white;
        }
        .text{
            color:white;
        }
        .plans{
            background-color: white;
            margin: 100px auto;
            padding: 20px 50px;
            width: 450px;
            height: 500px;
            border-radius: 10px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .timer{
            position:absolute;
            top:10px;
            left:230px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .completed {
            text-decoration: line-through;
            color: green;
        }

        .completed:after {
            content: ' ✔';
            color: green;
        }
        #startWorkoutButton,.nextexecrsie{
            position:absolute;
            bottom:10px;
            right:10px;
        }
        .nextexecrsie:disabled{
            background-color:  rgb(255, 152, 152);
        }
    </style>
    <title>Fitness Tracker</title>
</head>
<body>
    <img class="backgroundimage" src="gym.jpg">
    <div id="container" class="container">
        <div class="progress-bar-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>
        <h2>Nutrition and Workout Plan</h2>
        <form id="fitness-form">
            <div class="step active">
                <h3>Information About You</h3>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="weight">Weight:</label>
                    <input type="number" id="weight" name="weight" required>
                </div>
                <div class="form-group">
                    <label for="height">Height:</label>
                    <input type="number" id="height" name="height" required>
                </div>
                <button type="button" class="btn next">Next</button>
            </div>
            <div class="step">
                <h3>Inbody if available</h3>
                <div class="form-group">
                    <label for="inbody" class="custom-file-upload">
                        Select Inbody (optional)
                        <div id="file-name" class="file-name">No file selected</div>
                    </label>
                    <input type="file" id="inbody" name="inbody" accept=".jpg, .jpeg, .png, .pdf" onchange="displayFileName()">
                </div>  
                <button type="button" class="btn back">Back</button>
                <button type="button" class="btn next">Next</button>
            </div>
            <div class="step">
                <h3>Select Your Availability</h3>
                <div class="form-group">
                    <label>
                        <input type="button" class="buttons" name="availability" value="morning"  onclick="selectAvailability(this)">
                        </label><br>
                    <label>
                        <input type="button" class="buttons" name="availability" value="afternoon" onclick="selectAvailability(this)">
                    </label><br>
                    <label>
                        <input type="button" class="buttons" name="availability" value="evening" onclick="selectAvailability(this)">
                    </label><br>
                    <label>
                        <input type="button" class="buttons" name="availability" value="night" onclick="selectAvailability(this)">
                    </label><br>
                    <label>
                        <input type="button" class="buttons" name="availability" value="flexible" onclick="selectAvailability(this)">
                    </label>
                </div>
                <button type="button" class="btn back">Back</button>
                <button type="button" class="btn next">Next</button>
            </div>
            <div class="step">
                <h3>What is your Goal?</h3>
                <div class="form-group">
                    <label>
                        <input type="button" class="buttons2" name="Goal" value="morning"  onclick="selectGoal(this)">
                        </label><br>
                    <label>
                        <input type="button" class="buttons2" name="Goal" value="afternoon" onclick="selectGoal(this)">
                    </label><br>
                    <label>
                        <input type="button" class="buttons2" name="Goal" value="evening" onclick="selectGoal(this)">
                    </label><br>
                    <label>
                        <input type="button" class="buttons2" name="Goal" value="night" onclick="selectGoal(this)">
                    </label><br>
                    <label>
                        <input type="button" class="buttons2" name="Goal" value="flexible" onclick="selectGoal(this)">
                    </label>
                </div>
                <button type="button" class="btn back">Back</button>
                <button type="submit" class="btn submit">Submit</button>
            </div>
        </form>
    </div>
    <div id="tracker" class="hidden">
    <!-- <div id="tracker"> -->
        <h2 class="text" style="color:red">Your Fitness Tracker</h2>
        <div class="plans">
        <div class="workout-plan" id="dailyWorkoutPlan"></div>
        <button id="startWorkoutButton">Start Workout</button>
        <div class="timer hidden" id="timerDisplay">00:00</div>
        <div class="exercise-display hidden" id="currentExercise"></div>
        <div class="exercise-display hidden" id="nextExercise"></div>
        <div class="video-tutorial hidden">
            <img style="width:400px" src="https://cdn.dribbble.com/users/2931468/screenshots/5720362/jumping-jack.gif">
            <!-- <video id="exerciseVideo" width="400" controls>
                <source src="https://cdn.dribbble.com/users/2931468/screenshots/5720362/jumping-jack.gif">
                Your browser does not support the video tag.
            </video> -->
        </div>
        <div id="message"></div>
        <button id="nextexecrsie" class="nextexecrsie hidden">Next</button>
        </div>
    </div>

    <audio id="timerSound" src="warning.mp3" preload="auto"></audio>

    <script>
        let selectedAvailability = '';
        let selectedGoal = '';
        const workoutPlans = {
            Monday: [
                { exercise: "Squats", duration: 30 },
                { exercise: "Push-ups", duration: 30 },
                { exercise: "Bent-over rows (using dumbbells)", duration: 30 }, 
                { exercise: "Plank", duration: 30 } 
            ],
            Tuesday: [
                { exercise: "Brisk walking or jogging", duration: 30 * 60 },  
                { exercise: "Jump rope", duration: 10 * 60 }  
            ],
            Wednesday: [
                { exercise: "Yoga or stretching", duration: 20 * 60 } 
            ],
            Thursday: [
                { exercise: "Jumping jacks", duration: 60 }, 
                { exercise: "Lunges", duration: 30 }, 
                { exercise: "Dumbbell shoulder press", duration: 30 }, 
                { exercise: "Mountain climbers", duration: 60 }
            ],
            Friday: [
                { exercise: "Cycling or elliptical", duration: 30 * 60 },  
                { exercise: "High knees or butt kicks", duration: 10 * 60 }  
            ],
            Saturday: [
                { exercise: "Walking, swimming, or sport", duration: 30 * 60 }  
            ],
            Sunday: [
                { exercise: "Jumping jacks", duration: 6 }, 
                { exercise: "Lunges", duration: 3 }, 
                { exercise: "Dumbbell shoulder press", duration: 3 }, 
                { exercise: "Mountain climbers", duration: 6 }
            ]
        };
        const currentDay = new Date().toLocaleString('en-us', { weekday: 'long' });
        displayWorkout(currentDay);
        function displayWorkout(day) {
            const exercises = workoutPlans[day];
            let workoutHTML = `<h2>${day}'s Workout</h2><ul>`;
            exercises.forEach((item, index) => {
                workoutHTML += `<li style="margin:20px;" id="exercise-${index}">${item.exercise}: ${item.duration > 60 ? item.duration / 60 + ' minutes' : item.duration + ' seconds'}</li>`;
            });
            workoutHTML += `</ul>`;
            document.getElementById('dailyWorkoutPlan').innerHTML = workoutHTML;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const steps = document.querySelectorAll('.step');
            const nextButtons = document.querySelectorAll('.next');
            const backButtons = document.querySelectorAll('.back');
            const progressBar = document.getElementById('progress-bar');
            let currentStep = 0;

            nextButtons.forEach(button => {
                button.addEventListener('click', () => {
                    if (currentStep < steps.length - 1) {
                        steps[currentStep].classList.remove('active');
                        currentStep++;
                        steps[currentStep].classList.add('active');
                        updateProgressBar();
                    }
                });
            });

            backButtons.forEach(button => {
                button.addEventListener('click', () => {
                    if (currentStep > 0) {
                        steps[currentStep].classList.remove('active');
                        currentStep--;
                        steps[currentStep].classList.add('active');
                        updateProgressBar();
                    }
                });
            });

            document.getElementById('fitness-form').addEventListener('submit', function(event) {
                event.preventDefault();
                document.getElementById('container').style.display = 'none';
                document.getElementById('tracker').classList.remove('hidden');

                
                const form = document.getElementById('fitness-form');

                const age = form.age.value;
                const weight = form.weight.value;
                const height = form.height.value;
                const inbodyFile = form.inbody.files.length > 0 ? form.inbody.files[0].name : 'No file selected';

                console.log('Age:', age);
                console.log('Weight:', weight);
                console.log('Height:', height);
                console.log('Inbody File:', inbodyFile);
                console.log('Availability:', selectedAvailability);
                console.log('Goal:', selectedGoal);
                document.getElementById('goal').innerHTML = selectedGoal;

                console.log(document.getElementById('fitness-form'));
            });

            function updateProgressBar() {
                const progress = (currentStep / (steps.length - 1)) * 100;
                progressBar.style.width = `${progress}%`;
            }
        });
        function displayFileName() {
            const fileInput = document.getElementById('inbody');
            const fileNameDisplay = document.getElementById('file-name');
            const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'No file selected';
            fileNameDisplay.textContent = fileName;
        }
        function selectAvailability(selectedButton) {
            const buttons = document.querySelectorAll('.buttons');
            buttons.forEach(button => button.classList.remove('selected'));
            selectedButton.classList.add('selected');
            selectedAvailability = selectedButton.value;
        }
        function selectGoal(selectedButton) {
            const buttons = document.querySelectorAll('.buttons2');
            buttons.forEach(button => button.classList.remove('selected'));
            selectedButton.classList.add('selected');
            selectedGoal = selectedButton.value;
        }



        const timerDisplay = document.getElementById('timerDisplay');
        const timerSound = document.getElementById('timerSound');
        const currentExerciseDisplay = document.getElementById('currentExercise');
        const nextExerciseDisplay = document.getElementById('nextExercise');
        const btn = document.getElementById('nextexecrsie');
        // const exerciseVideo = document.getElementById('exerciseVideo');
        let countdown;

        document.getElementById('startWorkoutButton').addEventListener('click', startWorkout);

        function startWorkout() {
            const exercises = workoutPlans[currentDay];
            let currentExerciseIndex = 0;

            // Show hidden elements
            document.getElementById('timerDisplay').classList.remove('hidden');
            document.getElementById('currentExercise').classList.remove('hidden');
            document.getElementById('nextExercise').classList.remove('hidden');
            document.querySelector('.video-tutorial').classList.remove('hidden');
            document.querySelector('.workout-plan').classList.add('hidden');
            document.querySelector('#startWorkoutButton').classList.add('hidden');
            document.getElementById('nextexecrsie').classList.remove('hidden');
            document.getElementById('nextexecrsie').disabled = true;
            
            

            function startNextExercise() {
                document.getElementById('nextexecrsie').disabled = true;
                if (currentExerciseIndex >= exercises.length) {
                    setTimeout(() => {
                        document.getElementById('timerDisplay').classList.add('hidden');
                        document.getElementById('currentExercise').classList.add('hidden');
                        document.getElementById('nextExercise').classList.add('hidden');
                        document.querySelector('.video-tutorial').classList.add('hidden');
                        document.querySelector('.workout-plan').classList.remove('hidden');
                        document.getElementById('nextexecrsie').classList.add('hidden');
                        return;
                    }, 1000);
                }

                const currentExercise = exercises[currentExerciseIndex];
                const nextExercise = exercises[currentExerciseIndex + 1];

                currentExerciseDisplay.innerHTML = `<h3>Current Exercise: ${currentExercise.exercise}</h3>`;
                nextExerciseDisplay.innerHTML = nextExercise ? `<h4>Next Exercise: ${nextExercise.exercise}</h4>` : '';

                // exerciseVideo.src = currentExercise.video;
                // exerciseVideo.load();

                startTimer(currentExercise.duration, currentExercise.exercise, () => {
                    document.getElementById(`exercise-${currentExerciseIndex}`).classList.add('completed');
                    currentExerciseIndex++;
                    startNextExercise();
                });
            }

            startNextExercise();
        }

        function startTimer(duration, exercise, callback) {
            clearInterval(countdown);
            let time = duration;
            timerDisplay.textContent = formatTime(time);

            countdown = setInterval(() => {
                time--;
                timerDisplay.textContent = formatTime(time);

                if (time <= 0) {
                    clearInterval(countdown);
                    document.getElementById('nextexecrsie').disabled = false;
                    timerSound.play();
                    btn.onclick = ()=>{
                        clearInterval(countdown);
                        callback();
                    }
                    setTimeout(() => {
                        callback();
                    }, 10000);
                }
            }, 1000);
        }

        function formatTime(seconds) {
            const minutesLeft = Math.floor(seconds / 60);
            const secondsLeft = seconds % 60;
            return `${String(minutesLeft).padStart(2, '0')}:${String(secondsLeft).padStart(2, '0')}`;
        }
    </script>
</body>
</html>
