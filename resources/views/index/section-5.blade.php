<div class="px-4 py-4 md:py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
	<div class="grid gap-5 row-gap-8 lg:grid-cols-2">
		<div class="flex">
            <div class="w-full">
                <div class="rounded-md p-6 bg-white shadow">
                    <div class="mb-2 pb-2">
                        <h3 class="font-semibold text-lg text-gray-600 text-center">{{ __('messages.chart_title') }}</h3>
                    </div>
                    {{--  <div id="chartdiv" class="w-full" style="height: 240px"></div>  --}}
                    {{--  <div class="w-full "  --}}
                    <canvas id="myChart" class="max-w-full max-h-72"></canvas>
                </div>
            </div>
		</div>
        <div class="w-full">
            <div class="rounded-md p-6 bg-white shadow">
                <div class="mb-2 pb-2"><p class="text-sm text-gray-500">{{ __('messages.note') }}</p></div>
                @foreach ($chart_departments as $department)
                    <div class="flex py-2">
                        <img src="icon/play.svg" class="flex fill-current text-gray-500 w-4 h-4 mr-2 pt-1">
                        <span class="text-gray-500 text-sm text-justify break-words pr-4">
                            @if(config('app.locale') == 'mm')
                                {{ $department->chart_name_mm }} : {{ $department->chart_explan_mm }}
                            @elseif(config('app.locale') == 'ja-jp')
                                {{ $department->chart_name_jp }} : {{ $department->chart_explan_jp }}
                            @else
                                {{ $department->chart_name_en }} : {{ $department->chart_explan_en }}
                            @endif
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    var chart_title = @json($arr_chart_title);
    var chart_data  = @json($arr_chart_data);
    var chart_color = @json($arr_chart_color);
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: chart_title,
                datasets: [{
                    data: chart_data,
                    backgroundColor: chart_color,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    labels: {
                        render: 'data',
                  //      fontColor: 'white',
                    }
                },
                animations: {
                    duration: 500,
                },

            },
        });
        </script>

{{--  <script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
chart.data = [
    {
        "country": "{{ __('messages.department.health') }}",
        "litres": 23
    },
    {
        "country": "{{ __('messages.department.education') }}",
        "litres": 9
    },
    {
        "country": "{{ __('messages.department.transport') }}",
        "litres": 6
    },
    {
        "country": "{{ __('messages.department.other') }}",
        "litres": 30
    },
    {
        "country": "{{ __('messages.department.all') }}",
        "litres": 11
    },
    {
        "country": "{{ __('messages.department.organization') }}",
        "litres": 7
    },
    {
        "country": "{{ __('messages.department.engineer') }}",
        "litres": 14
    }
];

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

}); // end am4core.ready()
</script>  --}}
