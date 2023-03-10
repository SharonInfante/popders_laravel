<<<<<<< Updated upstream
<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('login')); ?>">Longin</a>
<a href="<?php echo e(route('register')); ?>">Register</a>

<h1>POPDERS HOME</h1>

<a href="<?php echo e(route('playlist.index')); ?>">Playlist</a>

<?php $__env->stopSection(); ?>
=======
<?php
    function getPhrase()
    {
        $current_day = date('l');
    
        $motivation = ['Lunes con L de:Lograr tus objetivos', 'Martes con M de:Magnífico día para todas', 'Miércoles con M de:Mitad de semana, ¡vamos!', 'Jueves con J de:Jamás rendirte', 'Viernes con V de:Vámonos de juerga', 'Sábado con s de:Sonríele a la vida', 'Domingo con D de:Duerme todo el día'];
    
        switch ($current_day) {
            case 'Monday':
                $phrase = $motivation[0];
                break;
            case 'Tuesday':
                $phrase = $motivation[1];
                break;
            case 'Wednesday':
                $phrase = $motivation[2];
                break;
            case 'Thursday':
                $phrase = $motivation[3];
                break;
            case 'Friday':
                $phrase = $motivation[4];
                break;
            case 'Saturday':
                $phrase = $motivation[5];
                break;
            default:
                $phrase = $motivation[6];
        }
    
        return $phrase;
    }
    
    $phrase = getPhrase();
    $line1 = strtok($phrase, ':');
    $lines2and3 = strstr($phrase, ':');
    $lines2and3_formatted = strtok($lines2and3, ':');
    $line2 = strtok($lines2and3_formatted, ' ');
    $line3 = ltrim($lines2and3_formatted, $line2);
?>

<?php $__env->startSection('content'); ?>
<div class="div-content">
    <div class="container flex flex-col bg-stone-50/40 rounded-md max-w-4xl ">
       <div class="flex justify-end mb-16">
        <a href="<?php echo e(route('register')); ?>"><img class="mx-auto h-14 w-auto mr-6" src="<?php echo e(asset('img/icons/icono-user-add.png')); ?>" alt="icono reister"></a>
        <a href="<?php echo e(route('login')); ?>"><img class="mx-auto h-14 w-auto" src="<?php echo e(asset('img/icons/login-user.png')); ?>" alt="icono login"></a>
       </div>


        <div class="flex justify-centermt-16 mb-12">
            <div class="h-64 w-64 flex justify-center">
                <div class="bg-[url('img/avatares/natalia.png')] rounded-full h-48 w-48 border-4 border-amber-200 text-center flex items-center justify-center">
                    <a href="<?php echo e(route('playlist.index')); ?>">
                        <img class="rounded-full h-44 w-44" src="<?php echo e(asset('img/avatares/diana.png')); ?>" alt="avatar">
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center">
                <div class="ml-10 text-center">
                    <ul class="flex">
                        <li><span id="search-form" class="geolocations col-2">
                                <a href="#" id="geolocation">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFBE02"
                                        class="bi bi-geo-alt-fill text-center align-middle mt-2" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li id="city" class="text-3xl"></li>
                        <li><img src=" " id="weather-icon" width="60px" /></li>
                        <li id="degrees" class="text-3xl">ºC</li>
                        <li id="date" class="text-3xl"></li>
                    </ul>
                </div>
                <h2 class='text-center text-white text-2xl leading-loose mr-30'>- <?php echo e($line1); ?> -<br />
                    <span class="text-7xl text-amber-200"><?php echo e($line2); ?></span><br />
                    - <?php echo e($line3); ?> -
                </h2>
            </div>
        </div>
        <div class="flex justify-center align-bottom">
            <div class="rounded-full h-21 w-20 border-4 border-amber-200 text-center flex items-center justify-center m-5">
                <a href="<?php echo e(route('playlist.index')); ?>"><img class="rounded-full h-20 w-20" src="<?php echo e(asset('img/avatares/natalia.png')); ?>" alt="avatar"></a>
            </div>
            <div class="rounded-full h-21 w-21 border-4 border-amber-200 text-center flex items-center justify-center m-5">
                <a href="<?php echo e(route('playlist.index')); ?>"><img class="rounded-full h-20 w-20" src="<?php echo e(asset('img/avatares/gabriela.png')); ?>" alt="avatar"></a>
            </div>
            <div class="rounded-full h-21 w-21 border-4 border-amber-200 text-center flex items-center justify-center m-5">
                <a href="<?php echo e(route('playlist.index')); ?>"><img class="rounded-full h-20 w-20" src="<?php echo e(asset('img/avatares/sharon.png')); ?>" alt="avatar"></a>
            </div>
            <div class="rounded-full h-21 w-21 border-4 border-amber-200 text-center flex items-center justify-center m-5">
                <a href="<?php echo e(route('playlist.index')); ?>"><img class="rounded-full h-20 w-20" src="<?php echo e(asset('img/avatares/meena.png')); ?>" alt="avatar"></a>
            </div>
        </div>
    </div>
  </div>
    <script>
        function newDay(date) {
            let days = [
                "Domingo",
                "Lunes",
                "Martes",
                "Miercoles",
                "Jueves",
                "Viernes",
                "Sábado",
                
            ];
            let day = days[date.getDay()];
            let hour = date.getHours();
            if (hour < 10) {
                hour = `0${hour}`;
            }
            let minutes = date.getMinutes();
            if (minutes < 10) {
                minutes = `0${minutes}`;
            }

            return `${day} ${hour}:${minutes}`;
        }


        function infoTemperature(response) {
            let tempElement = document.querySelector("#degrees");
            let cityElement = document.querySelector("#city");
            let iconElement = document.querySelector("#weather-icon");
            let date = document.querySelector("#date");

            date.innerHTML = newDay(new Date());
            celsiusDegrees = response.data.main.temp;
            tempElement.innerHTML = Math.round(celsiusDegrees);
            cityElement.innerHTML = response.data.name;
            iconElement.setAttribute(
                "src",
                `http://openweathermap.org/img/wn/${response.data.weather[0].icon}@2x.png`
            );
            iconElement.setAttribute("alt", response.data.weather[0].description);

        }


        function searchInfo(city) {
            let apiKey = "a3c3f210b30127cb5ef5c59041b27e29";
            let apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;
            axios.get(apiUrl).then(infoTemperature);
        }

        function submit(event) {
            event.preventDefault();
            let formSearch = document.querySelector("#search-text");
            searchInfo(formSearch.value);
        }

        function showPosition(position) {
            let apiKey = "a3c3f210b30127cb5ef5c59041b27e29";
            let latitude = position.coords.latitude;
            let longitude = position.coords.longitude;
            let geoApiUrl =
                `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${apiKey}&units=metric`;
            axios.get(geoApiUrl).then(infoTemperature);
        }

        function getPosition(event) {
            event.preventDefault();
            navigator.geolocation.getCurrentPosition(showPosition);
        }

        function celsiusElement(event) {
            event.preventDefault();
            let tempElement = document.querySelector("#degrees");
            tempElement.innerHTML = Math.round(celsiusDegrees);
        }
        let celsiusDegrees = null;

        let form = document.querySelector("#search-form");
        form.addEventListener("submit", submit);

        let getCurrentIcon = document.querySelector("#geolocation");
        getCurrentIcon.addEventListener("click", getPosition);


        searchInfo("Barcelona");
    </script>
<?php $__env->stopSection(); ?>

>>>>>>> Stashed changes
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practica\popders_laravel\popders_laravel\resources\views/home.blade.php ENDPATH**/ ?>