import Echo from 'laravel-echo';
import Reverb from 'laravel-reverb';

window.Reverb = Reverb;

const echo = new Echo({
      broadcaster: 'reverb',
      key: 'your-reverb-key',
      wsHost: window.location.hostname,
      wsPort: 8080,
      forceTLS: false,
      disableStats: true,
});

echo.channel('fluidalert')
      .listen('fluidalert.new', (data) => {
            const container = document.getElementById('fluid-alert-container');
            const alert = document.createElement('div');
            alert.className = 'bg-blue-500 text-white p-4 mb-2 rounded animate-fade-in';
            alert.textContent = data.message;
            container.appendChild(alert);

            setTimeout(() => {
                  alert.classList.add('animate-fade-out');
                  setTimeout(() => alert.remove(), 500);
            }, 5000);
      });
