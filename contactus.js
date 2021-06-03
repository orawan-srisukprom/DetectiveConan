const sendMail = () => {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    window.open(`mailto:eaffyharmony@gmail.com?subject=mailfrom-${name+' '+email}&body=${message}`);
}