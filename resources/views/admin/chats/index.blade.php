@extends('template')
@section('dashboard')
    <div class="body__content" ui-view></div>
@endsection

@section('extrascripts')
        <script src="https://connect.facebook.net/en_US/sdk.js"></script>

        <!-- inject:js -->
        <script src="https://dashboard.prismapp.io/dist/js/PrismDashboard-v0.1.73.15.min.js"></script>
        <script src="https://dashboard.prismapp.io/dist/assets/js/snap.js"></script>
        <script src="https://dashboard.prismapp.io/dist/assets/analytics-js/google-analytics.js"></script>
        <script src="https://dashboard.prismapp.io/dist/assets/analytics-js/heap.js"></script>
        <script src="https://dashboard.prismapp.io/dist/assets/analytics-js/hotjar.js"></script>
        <script src="https://dashboard.prismapp.io/dist/assets/analytics-js/intercom.js"></script>
        <script src="https://dashboard.prismapp.io/dist/assets/analytics-js/newrelic.js"></script>
        <script src="https://dashboard.prismapp.io/dist/assets/analytics-js/sentry.js"></script>
@endsection