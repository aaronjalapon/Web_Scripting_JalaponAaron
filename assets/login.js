document.getElementById('loginForm').addEventListener('submit', function(e) {
    let error = '';
    const form = e.target;
    if (!form.username.value.trim() || !form.password.value) {
        error = 'Both fields are required.';
    }
    if (error) {
        e.preventDefault();
        const errDiv = document.getElementById('loginError');
        errDiv.textContent = error;
        errDiv.style.display = 'block';
    }
});
