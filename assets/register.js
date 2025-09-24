document.getElementById('registerForm').addEventListener('submit', function(e) {
    let error = '';
    const form = e.target;
    const email = form.email.value.trim();
    const password = form.password.value;
    const confirm = form.confirm_password.value;
    const gender = form.gender.value;
    const country = form.country.value;
    if (!form.fullname.value.trim() || !email || !form.username.value.trim() || !password || !confirm || !gender || !country) {
        error = 'All fields are required.';
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        error = 'Invalid email format.';
    } else if (password !== confirm) {
        error = 'Passwords do not match.';
    }
    if (error) {
        e.preventDefault();
        const errDiv = document.getElementById('registerError');
        errDiv.textContent = error;
        errDiv.style.display = 'block';
    }
});
