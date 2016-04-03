@extends('layouts.index')

@section('title', 'Mental Health in Tech Survey Results')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h2 class="content-header" id="resources">Survey Results</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-quote">
            This survey intends to collect information about mental health in the IT/tech community.
            All responses are anonymous, and no identifying information will be collected or stored.
            If you have questions or comments about this survey, please email <a href="mailto:survey@osmihelp.org">survey@osmihelp.org</a>
        </div>
        <div class="col-sm-8 col-xs-12 col-content">
            <div class="list-group">
                <a class="list-group-item" href="https://osmihelp.org/survey2016/" target="_blank">
                    <h4 class="resource-title">
                        <i class="fa fa-chevron-circle-right fa-fw"></i> Take the Mental Health in Tech Survey 2016
                    </h4>
                    <h5>How Will This Data Be Used?</h5>
                    <p class="resource-description">
                        We are interested in gauging how mental health is viewed within the tech/IT workplace,
                        and the prevalence of certain mental health disorders within the tech industry.
                        The Open Sourcing Mental Illness team of volunteers will use this data to drive our work in raising
                        awareness and improving conditions for those with mental health disorders in the IT workplace.
                    </p>
                </a>
            </div>
        </div>
        <div class="col-sm-8 col-xs-12 col-content">
            <div class="list-group">
                <a class="list-group-item" href="https://survey.osmihelp.org/results">
                    <h4 class="resource-title">
                        <i class="fa fa-chevron-circle-right fa-fw"></i> 2016 Survey Results
                    </h4>
                    <p class="resource-description">
                        View results and data we have gathered from the 2016 Mental Health in Tech Survey.
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection