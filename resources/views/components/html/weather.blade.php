<div class="container-weather">
    <div class="weather-side">
        <div class="weather-gradient"></div>
        <div class="date-container">
            <h2 class="date-dayname">
                <i class="bi bi-geo-alt fs-2" data-feather="map-pin"></i>
                {{ $weather['city'] }}
            </h2>
            <span class="date-day text-gray-800">
                {{ $weather['date'] }} - {{ $weather['time'] }}
            </span>
        </div>
        <div class="weather-container">
            <h1 class="weather-temp">
                {{ $weather['temp'] }}°C
            </h1>
            <h3 class="weather-desc">
                {{ $weather['description'] }}
            </h3>
        </div>
    </div>
</div>
