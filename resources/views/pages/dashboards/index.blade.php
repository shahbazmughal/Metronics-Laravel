<x-default-layout>
    <script src="/assets/js/custom/apps/charts/core.js"></script>
    <script src="/assets/js/custom/apps/charts/charts.js"></script>
    <script src="/assets/js/custom/apps/charts/animated.js"></script>
    <script src="/assets/js/custom/apps/charts/anychart-base.min.js"></script>
    <script src="/assets/js/custom/apps/charts/anychart-ui.min.js"></script>
    <script src="/assets/js/custom/apps/charts/anychart-exports.min.js"></script>
    <script src="/assets/js/custom/apps/charts/anychart-map.min.js"></script>
    <script src="/assets/js/custom/apps/charts/anychart-data-adapter.min.js"></script>
    <script src="/assets/js/custom/apps/charts/world.js"></script>
    


    <div class="row g-5 g-xl-10">
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 mb-md-5 mb-xl-10">
            @include('partials/widgets/cards/_widget-1')
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 mb-md-5 mb-xl-10">
            @include('partials/widgets/cards/_widget-2')
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 mb-md-5 mb-xl-10">
            @include('partials/widgets/cards/_widget-3')
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 mb-md-5 mb-xl-10">
            @include('partials/widgets/cards/_widget-4')
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 mb-md-5 mb-xl-10">
            @include('partials/widgets/cards/_widget-5')
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-2 mb-md-5 mb-xl-10">
            @include('partials/widgets/cards/_widget-6')
        </div>
    </div>
    <div class="row g-5 g-xl-10">
        <div class="col-xl-12 col-md-6 mb-md-5 mb-xl-10">
            @include('partials/widgets/charts/_widget-1')
        </div>
    </div>
    <div class="row g-5 g-xl-10">
        <div class="col-xxl-8 mb-md-5 mb-xl-10">
            @include('partials/widgets/charts/_widget-2')
        </div>
        <div class="col-xl-4 mb-md-5 mb-xl-10">
            @include('partials/widgets/tables/_widget-1')
        </div>
    </div>
    <div class="row g-5 g-xl-10">
        <div class="col-xl-4">
            @include('partials/widgets/charts/_widget-3')
        </div>
        <div class="col-xl-4">
            @include('partials/widgets/charts/_widget-4')
        </div>
        <div class="col-xl-4">
            @include('partials/widgets/tables/_widget-2')
        </div>
    </div>
    <div class="row g-5 g-xl-10">
        <div class="col-xl-4">
            @include('partials/widgets/tables/_widget-3')
        </div>
        <div class="col-xl-8">
            @include('partials/widgets/lists/_widget-1')
        </div>
    </div>
</x-default-layout>
