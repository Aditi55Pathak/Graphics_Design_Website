document.addEventListener('DOMContentLoaded', function () {
    const expertiseItems = document.querySelectorAll('.expertise-item');

    expertiseItems.forEach(item => {
        const skillLevel = item.dataset.level;
        const skillBar = item.querySelector('.skill-bar');

        skillBar.style.width = skillLevel;
    });
});
