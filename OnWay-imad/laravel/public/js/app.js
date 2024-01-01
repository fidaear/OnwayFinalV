
const modeToggle = document.getElementById('modeToggle');
const currentMode = localStorage.getItem('mode');

    if (currentMode === 'dark') {
        document.body.classList.add('dark-mode');
    }
    
    
    modeToggle.innerHTML = currentMode == 'dark' ? '<i class="bi bi-brightness-low-fill"></i>' : '<i class="bi bi-moon-stars-fill"></i>';
   

    modeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    const newMode = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
    localStorage.setItem('mode', newMode);
    // Send AJAX request to update mode on the server
    fetch('/toggle-mode', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify({ mode: newMode }),
    });
});