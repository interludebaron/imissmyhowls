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
            width: 100vw;
            overflow: hidden; 
        }

        /* --- NAVBAR FIX --- */
        .navbar-custom {
            padding: 20px 50px;
            display: flex;
            justify-content: flex-end; 
            z-index: 1000;
        }
        .navbar-custom a {
            color: var(--text-white);
            text-decoration: none;
            font-size: 1.1rem;
            cursor: pointer;
            border-bottom: 1px solid transparent;
            transition: 0.3s;
        }
        .navbar-custom a:hover { border-bottom: 1px solid var(--howls-gold); }
        /* --- MAIN CONTENT (Grid) --- */
        .container {
            display: grid;
            grid-template-columns: 1fr 1.5fr 1fr;
            width: 95%;
            max-width: 1400px;
            gap: 30px;
            margin: auto; /* Centers the whole UI vertically */
            align-items: center;
        }
        /* LEFT COL (Titles, Tasks, Timer) */
        .left-col { display: flex; flex-direction: column; gap: 25px; }
        .title-section h1 { font-size: 2.5rem; margin: 0; }
        .gold-text { color: var(--howls-gold); }
        .task-input {

            background: transparent;
            border: none;
            border-bottom: 2px solid white;
            color: white;
            padding: 10px 0;
            width: 100%;
            outline: none;

        }
    

        @media (max-width: 1000px) {
    .container {
        grid-template-columns: 1fr; /* Stacks everything in one column */
        height: auto;
        overflow-y: scroll;
    }
    .howl-art {
        max-height: 50vh; /* Makes Howl a bit smaller on mobile */
    }
}

        .task-list-container { font-size: 0.9rem; height: 150px; overflow-y: auto; margin-top: 10px; }
        .task-item { cursor: pointer; margin: 8px 0; }
        .completed { text-decoration: line-through; opacity: 0.5; color: var(--task-pink); }

        /* POMODORO TEXT FIX */
        .timer-section { display: flex; flex-direction: column; gap: 10px; }
        .timer-pill {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.8rem;
            color: var(--howls-gold);
            cursor: pointer;
            border: 1px solid rgba(255,255,255,0.2);
            width: fit-content;
        }
        /* CENTER COL (Art) */
        .howl-art {
            max-width: 100%;
            max-height: 70vh;
            filter: drop-shadow(0 0 30px rgba(244, 208, 63, 0.15));
        }

        /* RIGHT COL (Audio) */
        .right-col { display: flex; flex-direction: column; gap: 20px; }
        .mixer-item { font-size: 0.85rem; display: flex; flex-direction: column; gap: 5px; }
        input[type="range"] { width: 100%; accent-color: white; }

        /* --- ABOUT CARD MODAL --- */

        #aboutCard {
            display: none;
            position: fixed;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(5, 22, 48, 0.95);
            border: 2px solid var(--howls-gold);
            padding: 40px;
            border-radius: 20px;
            z-index: 2000;
            width: 400px;
            text-align: center;
            box-shadow: 0 0 50px rgba(0,0,0,0.8);

        }

        /*--AUDIO--*/
        .play-btn {
    cursor: pointer;
    margin-left: 5px;
    font-size: 0.9rem;
    transition: 0.2s;
}
.play-btn:hover { color: var(--howls-gold); }
        /* --- CALCIFER FIX --- */
        /* Position the trigger in the corner */
.calcifer-trigger {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    z-index: 1000;
}
.calcifer-trigger {
    /* (All your existing CSS) */
    display: none; /* Add this line to hide him and the speech bubble */
}

/* Style the speech bubble */
.bubble {
    background: rgba(234, 113, 137, 0.2); /* That soft pinkish tint from your UI */
    color: white;
    padding: 8px 12px;
    border-radius: 15px 15px 0 15px; /* Chat bubble shape */
    font-size: 0.75rem;
    white-space: nowrap;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.calcifer-img {
    width: 120px; /* Keeping the size small and subtle */
    height: auto;
}

        /*--- Footer ---*/
        footer { text-align: center; padding: 10px; font-size: 0.7rem; opacity: 0.4; }
    </style>
</head>
<body>
<!--NAVBAR-->
    <!-- mute button--> 
    <nav class="navbar-custom">
    <span id="mute-all-btn" onclick="muteAll()" style="margin-right: 20px; cursor: pointer;">🔊</span>
    <a onclick="toggleAbout()">about</a>
</nav>
<!-- ABOUT CARD-->
    <div id="aboutCard">
        <h2 class="gold-text">About</h2>
        <p>Let's study with Howl's and Calcifer ! IMissMyHowl's is my first personal project I worked on, Ghibli has always been a huge comfort and motivation for me, I had lots of fun learning and building this study website. I hope you enjoy it as much as I do.
        <p>Use Chrome for the best experience ! </p>
<p>Inspired by IMissMyCafe, IMissMyBar, and IMissMyOffice. Code and illustration by Baron (me). No copyright infringement intended.</p>
        <p style="font-size: 1.0rem;">All Audios are from YT</p>
        <button onclick="toggleAbout()" style="margin-top:20px; background: var(--howls-gold); border:none; padding: 10px 20px; cursor:pointer; border-radius:5px;">Close</button>
    </div>

    <div class="container">
        <div class="left-col">
            <div class="title-section">
<!--title-->
                <h1>I Miss </h1>
                <h1>My <span class="gold-text">Howl's</span></h1>
                <p>Finish your tasks with Howl's and Calcifer</p>
            </div>

            <div class="tasks">
                <input type="text" id="taskInput" class="task-input" placeholder="Add a task...">
                <div class="task-list-container">
                    <p style="color:var(--howls-gold)">NOT COMPLETED</p>
                    <div id="pendingTasks"></div>
                    <p style="color:var(--task-pink)">COMPLETED</p>
                    <div id="completedTasks"></div>
                </div>
            </div>
<!--pomodoro-->
            <div class="timer-section">

                <p>⏳ Pomodoro timer</p>

                <div class="timer-pill" id="pomo-display" onclick="toggleTimer()">25:00</div>

            </div>

        </div>
<!--HOWLS PICTURE CARD-->
        <div class="center-col">
           <center> <img src="howls.jpg" alt="Howl" class="howl-art"></center>
        </div>

        <div class="right-col">
<!-- AUDIOS --> 

<audio id="audio-howl" src="howls_castle.mp3" loop></audio>
<audio id="audio-fireplace" src="fireplace.mp3" loop></audio>
<audio id="audio-ghibli" src="ghibli_piano.mp3" loop></audio>
<audio id="audio-rain" src="rain.mp3" loop></audio>
<audio id="audio-nostalgic" src="nostalgic.mp3" loop></audio>

<div class="mixer-item">
    <span>Howl's Moving Castle ASMR 
        <span class="play-btn" onclick="togglePlay('audio-howl', this)">▶</span>
    </span>
    <input type="range" min="0" max="1" step="0.1" value="0.5" 
           oninput="changeVolume('audio-howl', this.value)">
</div>

<div class="mixer-item">
    <span>Fireplace Crackling
        <span class="play-btn" onclick="togglePlay('audio-fireplace', this)">▶</span>
    </span>
    <input type="range" min="0" max="1" step="0.1" value="0.5" 
           oninput="changeVolume('audio-fireplace', this.value)">
</div>
<div class="mixer-item">
    <span>Ghibli instrumentals
        <span class="play-btn" onclick="togglePlay('audio-ghibli', this)">▶</span>
    </span>
    <input type="range" min="0" max="1" step="0.1" value="0.5" 
           oninput="changeVolume('audio-ghibli', this.value)">
</div>
<div class="mixer-item">
    <span> Rain ASMR
        <span class="play-btn" onclick="togglePlay('audio-rain', this)">▶</span>
    </span>
    <input type="range" min="0" max="1" step="0.1" value="0.5" 
           oninput="changeVolume('audio-rain', this.value)">
</div>
<div class="mixer-item">
    <span>Nostalgic playlist
        <span class="play-btn" onclick="togglePlay('audio-nostalgic', this)">▶</span>
    </span>
    <input type="range" min="0" max="1" step="0.1" value="0.5" 
           oninput="changeVolume('audio-nostalgic', this.value)">
</div>

<!--
            <div class="mixer-item">Howl's Moving Castle ASMR 🔊 <input type="range"></div>
            <div class="mixer-item">Fireplace crackling 🔊 <input type="range"></div>
            <div class="mixer-item">Ghibli instrumentals 🔊 <input type="range"></div>
            <div class="mixer-item">Rain ASMR 🔊 <input type="range"></div>
            <div class="mixer-item">Nostalgic playlist 🔊 <input type="range"></div>
-->
        </div>
    </div>
   <div class="calcifer-trigger" onclick="alert('Rawr! I am a scary fire demon! Do your best ! BE FOCUSED ! ')">
    <div class="bubble"> click me </div>
    <img src="calcifer img.png" alt="Calcifer" class="calcifer-img">
</div>

    <footer>
    &copy;  Built and designed by <strong> Baron </strong>.  
     <p>All rights reserved. Made with love and magic. </p>
    </footer>

    <script>
        function toggleAbout() 
        {
            const card = document.getElementById('aboutCard');
            card.style.display = (card.style.display === 'block') ? 'none' : 'block';
        }

        // Timer and Task logic as before...
        const taskInput = document.getElementById('taskInput');

        taskInput.addEventListener('keypress', function (e) {

            if (e.key === 'Enter' && this.value.trim() !== "") {

                const div = document.createElement('div');
                div.className = 'task-item';
                div.innerText = "• " + this.value;
                div.onclick = function() {
                    if (this.parentElement.id === 'pendingTasks') 
                    {
                        this.classList.add('completed');
                        document.getElementById('completedTasks').appendChild(this);
                    }
                    else 
                    {
                        this.classList.remove('completed');
                        document.getElementById('pendingTasks').appendChild(this);
                    }
                };

                document.getElementById('pendingTasks').appendChild(div);
                this.value = "";
            }
        });
        let timerSeconds = 25 * 60;
        let timerRunning = false;
        let countdown;
        function toggleTimer() {
            if (timerRunning) { clearInterval(countdown); timerRunning = false; }
            else {
                timerRunning = true;
                countdown = setInterval(() => {
                    timerSeconds--;
                    const mins = Math.floor(timerSeconds / 60);
                    const secs = timerSeconds % 60;
                    document.getElementById('pomo-display').innerText = `${mins}:${secs < 10 ? '0' : ''}${secs}`; }, 1000);
            }
        }
        // audio 

        function togglePlay(id, btn) {
    const audio = document.getElementById(id);
    if (audio.paused) {
        audio.play();
        btn.innerText = "⏸"; // Switch icon to pause
    } else {
        audio.pause();
        btn.innerText = "▶"; // Switch icon back to play
    }
}

function changeVolume(id, vol) {
    const audio = document.getElementById(id);
    audio.volume = vol; // Sets volume between 0.0 and 1.0
}

let isMuted = false;

function muteAll() {
    const allAudios = document.querySelectorAll('audio');
    const muteBtn = document.getElementById('mute-all-btn');
    
    isMuted = !isMuted; // Toggle the state
    
    allAudios.forEach(audio => {
        audio.muted = isMuted; // Mute or unmute
    });

    // Update the icon to show it's muted
    muteBtn.innerText = isMuted ? "🔇" : "🔊";
}
    </script>
</body>
</html>
<!--http://localhost/web/swm/draft.php  ->