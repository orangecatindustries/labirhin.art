const video = document.getElementById("js-video");
const canvas = document.getElementById("js-canvas");
const ctx = canvas.getContext("2d");
let step;
const frameduration = 1000 / 30;
let lastframetime = 0;

canvas.width = 32;
canvas.height = 18;

const draw = () => ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
const drawLoop = (currentTime) => {
    step = window.requestAnimationFrame(drawLoop);

    const elapsed = currentTime - lastframetime;
    if (elapsed >= frameduration) {
        lastframetime = currentTime - (elapsed % frameduration);
        draw();
    }
};

const start = () => {
    if (!step) drawLoop();
};

const stop = () => {
    cancelAnimationFrame(step); step = null;
};

video.addEventListener("play", start);
video.addEventListener("pause", stop);

new IntersectionObserver(([event]) => {
    event.isIntersecting ? video.play().catch(() => { }) : video.pause();
}).observe(video);