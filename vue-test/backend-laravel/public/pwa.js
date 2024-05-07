let deferredPrompt;


async function download(){
    if (deferredPrompt !== null) {
        deferredPrompt.prompt();
        const { outcome } = await deferredPrompt.userChoice;
        if (outcome === 'accepted') {
            deferredPrompt = null;
        }
    }
}
    window.addEventListener('beforeinstallprompt', (e) => {
        deferredPrompt = e;
    });
