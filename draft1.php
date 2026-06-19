<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Miss My Howl's</title>
    <style>
        :root {
            --midnight-blue: #051630;
            --howls-gold: #f4d03f;
            --text-white: #ffffff;
            --task-pink: #ffb7c5;
        }

        body {
            background-color: var(--midnight-blue);
            color: var(--text-white);
            font-family: 'Georgia', serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }

        /* Navbar - Kept on extreme right */
        .navbar-custom {
            padding: 20px 40px;
            display: flex;
            justify-content: flex-end;
            width: 100%;
        }

        .navbar-custom a {
            color: var(--text-white);
            text-decoration: none;
            cursor: pointer;
            font-size: 1.1rem;
        }

        /* Layout Grid */
        .container {
            display: grid;
            grid-template-columns: 1fr 1.5fr 1fr; 
            width: 95%;
            max-width: 1400px;
            gap: 40px;
            margin: auto;
            align-items: center;
        }

        .left-col { display: flex; flex-direction: column; gap: 20px; }
        
        /* Your Title Setup */
        .title-section h1 { font-size: 2.5rem; margin: 0; }
        .gold-text { color: var(--howls-gold); }

        .task-input {
            background: transparent;
            border: none;
            border-bottom: 2px solid white;
            color: white;
            padding: 10px 0;
            width: 90%;
            outline: none;
        }

        .task-list-container { font-size: 0.9rem; height: 120px; overflow-y: auto; }
        .task-item { cursor: pointer; margin: 8px 0; }
        .completed { text-decoration: line-through; opacity: 0.5; color: var(--task-pink); }

        /* Timer Pill */
        .timer-pill {
            background: rgba(255, 255, 255, 0.1);
            padding: 12px 35px;
            border-radius: 50px;
            font-size: 1.8rem;
            color: var(--howls-gold);
            cursor: pointer;
            border: 1px solid rgba(255,255,255,0.2);
            width: fit-content;
            text-align: center;
        }

        /* Center Art */
        .howl-art {
            max-width: 100%;
            max-height: 75vh;
            filter: drop-shadow(0 0 30px rgba(244, 208, 63, 0.1));
        }

        /* Right Column Audio */
        .right-col { display: flex; flex-direction: column; gap: 15px; }
        .mixer-item { display: flex; flex-direction: column; gap: 5px; font-size: 0.8rem; }
        input[type="range"] { width: 100%; accent-color: white; }

        /* CALCIFER & BUBBLE - BACK IN PLACE */
        .calcifer-trigger {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
            z-index: 1000;
        }

        .calcifer-img {
            width: 60px; /* Kept to your preferred size */
            height: auto;
        }

        .bubble { 
            background: rgba(255, 183, 197, 0.2); 
            padding: 8px 12px; 
            border-radius: 15px 15px 0 15px; 
            font-size: 0.75rem;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Footer - Your exact wording */
        footer {
            padding: 15px;
            text-align: center;
            font-size: 0.7rem;
            opacity: 0.5;
            width: 100%;
        }

        /* About Card Modal */
        #aboutCard {
            display: none;
            position: fixed;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            background: var(--midnight-blue);
            border: 1px solid var(--howls-gold);
            padding: 30px;
            border-radius: 15px;
            z-index: 2000;
            text-align: center;
            width: 300px;
        }
    </style>
</head>
<body>

    <nav class="navbar-custom">
        <a onclick="toggleAbout()">about</a>
    </nav>

    <div id="aboutCard">
        <h3 class="gold-text">About This Project</h3>
        <p>Your ideation/credits go here.</p>
        <button onclick="toggleAbout()">Close</button>
    </div>

    <div class="container">
        <div class="left-col">
            <div class="title-section">
                <h1>I Miss </h1>
                    <h1>My <span class="gold-text">Howl's</span></h1>
                <p style="opacity: 0.7; font-size: 0.8rem;">Finish your tasks with Howl's and Calcifer</p>
            </div>

            <div class="tasks">
                <input type="text" id="taskInput" class="task-input" placeholder="Add a task...">
                <div class="task-list-container">
                    <p style="color: var(--howls-gold); font-size: 0.7rem;">NOT COMPLETED</p>
                    <div id="pendingTasks"></div>
                    <p style="color: var(--task-pink); font-size: 0.7rem; margin-top: 10px;">COMPLETED</p>
                    <div id="completedTasks"></div>
                </div>
            </div>

            <p style="font-size: 0.8rem;">⏳ Pomodoro timer</p>
            <div class="timer-pill" id="pomo-display" onclick="toggleTimer()">25:00</div>
        </div>

        <div class="center-col">
            <img src="howls.jpg" alt="Howl" class="howl-art">
        </div>

        <div class="right-col">
            <div class="mixer-item"><span>Howl's Moving Castle ASMR 🔊</span><input type="range"></div>
            <div class="mixer-item"><span>Fireplace crackling 🔊</span><input type="range"></div>
            <div class="mixer-item"><span>Ghibli instrumentals 🔊</span><input type="range"></div>
            <div class="mixer-item"><span>Rain ASMR 🔊</span><input type="range"></div>
            <div class="mixer-item"><span>Nostalgic playlist 🔊</span><input type="range"></div>
        </div>
    </div>

    <div class="calcifer-trigger">
        <div class="bubble">stuck? ask me</div>
        <img src="calcifer img.png" alt="Calcifer" class="calcifer-img">
    </div>

    <footer>
        &copy; Built and designed by Riv . All rights reserved.
    </footer>

    <script>
        // TASK LOGIC
        const taskInput = document.getElementById('taskInput');
        taskInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter' && this.value.trim() !== "") {
                const div = document.createElement('div');
                div.className = 'task-item';
                div.innerText = "• " + this.value;
                div.onclick = function() {
                    if (this.parentElement.id === 'pendingTasks') {
                        this.classList.add('completed');
                        document.getElementById('completedTasks').appendChild(this);
                    } else {
                        this.classList.remove('completed');
                        document.getElementById('pendingTasks').appendChild(this);
                    }
                };
                document.getElementById('pendingTasks').appendChild(div);
                this.value = "";
            }
        });

        // FIXED TIMER LOGIC
        let timerSeconds = 25 * 60;
        let timerRunning = false;
        let countdown;

        function toggleTimer() {
            if (timerRunning) {
                clearInterval(countdown);
                timerRunning = false;
            } else {
                timerRunning = true;
                // Start the countdown properly
                countdown = setInterval(() => {
                    if (timerSeconds <= 0) {
                        clearInterval(countdown);
                        timerRunning = false;
                        alert("Break time!");
                        return;
                    }
                    timerSeconds--;
                    updateDisplay();
                }, 1000);
            }
        }

        function updateDisplay() {
            const mins = Math.floor(timerSeconds / 60);
            const secs = timerSeconds % 60;
            document.getElementById('pomo-display').innerText = 
                `${mins}:${secs < 10 ? '0' : ''}${secs}`;
        }

        function toggleAbout() {
            const card = document.getElementById('aboutCard');
            card.style.display = (card.style.display === 'block') ? 'none' : 'block';
        }
    </script>
</body>
</html>