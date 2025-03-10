        function updateTime() {
            var currentDate = new Date();

            var day = currentDate.getDate().toString().padStart(2, '0'); 
            var month = currentDate.getMonth() + 1;
            month = month.toString().padStart(2, '0');
            var year = currentDate.getFullYear();
            var hours = currentDate.getHours().toString().padStart(2, '0');
            var minutes = currentDate.getMinutes().toString().padStart(2, '0');
            var seconds = currentDate.getSeconds().toString().padStart(2, '0');
            var timezone = 'WIB';

            var formattedTime = day + ' ' + month + ' ' + year + ', ' + hours + ':' + minutes + ':' + seconds + ' ' + timezone;

            document.getElementById('current-time').innerText = formattedTime;
        }

        setInterval(updateTime, 1000);

        window.onload = updateTime;