
document.getElementById('whatsapp-button').onclick = function () {
    document.getElementById('chat-box').style.display = 'block';
};

document.getElementById('close-chat').onclick = function () {
    document.getElementById('chat-box').style.display = 'none';
};

document.getElementById('sendMessage').onclick = function () {
    const message = document.getElementById('userMessage').value.trim();
    if (message !== '') {
        const phone = '971563447645'; // UAE number without 0
        const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
        window.open(url, '_blank');
        document.getElementById('chat-box').style.display = 'none';
        document.getElementById('userMessage').value = ''; // clear input
    }
};

